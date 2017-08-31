<?php

namespace XB;

use Illuminate\Console\Command;
use XB\theory\Shoot;
use XB\telegramObjects\Update;
use App\User;

class telegramProccess extends Command
{
    protected $signature = 'bot:proccess 
        {id= : Unique Id }
        {--s|serve : Endless proccess}';
    protected $description = 'telegram service proccess!!!';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $id=str_replace('id=','',$this->argument('id='));
        $lock="storage/bizinehRud/$id.lock";
        $info=[
            'ID'=>$id,
            'PID'=>getmypid(),
            'GID'=>getmygid(),
            'UID'=>getmyuid(),
            'started_at'=>date('Y-m-d H:i:s'),
            'options'=>$this->options(),
        ];
        \File::put($lock,json_encode($info));
        do{
            $files=\File::Files('storage/bizinehRud/updates');
            foreach($files as $file){

                if(\File::size($file)>20000){
                    \File::move($file,str_replace('updates','olds',$file));
                    continue;
                }

                $data=\File::get($file);
                $json=json_decode($data,true);
                if(json_last_error()){
                    \File::move($file,str_replace('updates','olds',$file));
                    continue;
                }

                \File::move($file,$file=str_replace('updates/','proccessing.',$file));

                $shoot=new Shoot(new Update($json,'object'));

                $shoot->load();

                $shoot->fire();

                \File::move($file,$file=str_replace('proccessing.','olds/',$file));

                // Shoot::$result;
            }
            if(\File::exists('storage/bizinehRud/stop')){
                break;
            }
        }
        while($this->option('serve'));

        if($this->option('serve')){
            $info['stop_data']=\File::get('storage/bizinehRud/stop');
        }else{
            $info['stop_data']='a single proccess.';
        }
        $info['finished_at']=date('Y-m-d H:i:s');
        \File::put($lock,json_encode($info));
        \File::move($lock,str_replace("$id.lock","olds/$id.lock",$lock));
        \File::delete('storage/bizinehRud/stop');
    }
}
