<?php

namespace XB;

use Illuminate\Console\Command;
use XB\theory\Shoot;
use XB\telegramObjects\Update;
use App\User;

class telegramService extends Command
{
    protected $signature = "bot:run
        {action : [start|stop|status|restart|taste] Bot service} 
        {--f|force : Force Stop (when crashed)}";
    protected $description = 'telegram Bot service!!!';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        switch($this->argument('action')){
            case 'status':
                $this->status();
                break;
            case 'taste':
                $this->start(true);
                break;
            case 'start':
                $this->start();
                break;
            case 'stop':
                $this->stop();
                break;
            case 'restart':
                $this->stop();
                sleep(1);
                $this->start();
                break;
            default :
                $this->error("\n  Please select one of Actions:  \n\n\tstart\n\tstop\n\tstatus\n\trestart\n\ttaste\n");
        }
    }

    private $currentStatus;
    private $currentData;

    private function detect(){
        $files=\File::files('storage/bizinehRud/');
        $locks=[];
        foreach($files as $v){
            $v=substr($v,strrpos($v,'/')+1);
            if(preg_match("/^[0-9a-f]{13}\.lock$/", $v, $v)){
                $locks[]=$v[0];
            }
        }
        if(empty($locks)){
            $this->currentStatus='free';
            return;
        }

        $this->currentData=$data=json_decode(\File::get('storage/bizinehRud/'.$locks[0]),true);
        if(\File::exists('/proc/'.$data['PID'])){
            $this->currentStatus='busy';
            return;
        }

        $this->currentStatus='carshed';
    }

    private function status(){
        $this->detect();        
        if($this->currentStatus=='free'){
            $this->line("\n\t\tBot is FREE.\n");
            return;
        }
        
        $rows=[];
        $rows[]=['ID',$this->currentData['ID']];
        $rows[]=['Started at',$this->currentData['started_at']];

        if($this->currentStatus=='busy'){
            $this->info("\n\t\tBot is Running.\n");
            $interval = date_diff(
                date_create($this->currentData['started_at']), 
                date_create(date('Y-m-d H:i:s'))
            )->format('%R%a days %h:%i:%s');
            $rows[]=['Uptime',$interval];
            $this->table(['factor','value'],$rows);
            return;
        }

        $logFile="storage/bizinehRud/logs/{$this->currentData['ID']}.nohup.out";
        if(!\File::exists($logFile)){
            $interval= $logFile= 'N/A';
            $log='';
            $lastLogTime=0;
        }else{
            $log=\File::get($logFile);
            $lastLogTime=date('Y-m-d H:i:s',\File::lastModified($logFile));
            $interval = date_diff(
                date_create($this->currentData['started_at']), 
                date_create($lastLogTime)
            )->format('%R%a days %h:%i:%s');
        }
        
        $rows[]=['Uptime',$interval];
        $rows[]=['Crashed at',$lastLogTime];
        // $rows[]=['PID',$this->currentData['PID']];
        // $rows[]=['UID',$this->currentData['UID']];
        // $rows[]=['GID',$this->currentData['GID']];

        $this->error("\n\t\tBot CRASHED!!!\n");
        $this->table(['factor','value'],$rows);
        $this->error("\n\tBot log\n");
        $this->line($log);
    }
    private function stop(){
        $this->detect();        
        \File::put('storage/bizinehRud/stop','soft stop at:'.microtime(true));
    }

    private function start($taste=false){
        $this->detect();        
        if($this->current=="free"){
            $id=uniqid();
            // echo 'start';

            $this->info(`nohup ./artisan bot:proccess id=$id -s > storage/bizinehRud/logs/$id.nohup.out &`);
        }
        
    }
}
