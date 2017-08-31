<?php

namespace XB;

use Illuminate\Console\Command;
use XB\telegramMethods\deleteWebhook;
use XB\telegramMethods\getUpdates;

class telegramFetcher extends Command
{
    protected $signature = 'bot:fetcher {--serve} {--delay=3}';
    protected $description = 'fetching new update by getUpdate';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        (new deleteWebhook())->call();
        define('OLDS','storage/bizinehRud/olds/');
        define('UPDATES','storage/bizinehRud/updates/');
        $list=array_merge(
            \File::files(OLDS),
            \File::files(UPDATES)
        );
        $updates=[];
        foreach($list as $v){
            $v=substr($v,strrpos($v,'/')+1);
            if(preg_match("/^\d+(?=\.json)/", $v, $v)){
                $updates[]=$v[0];
            }
        }
        $last=-1;
        if(count($updates)){
            sort($updates);
            $last=end($updates);
        }
        do{
            $send=new getUpdates(['offset'=>$last]);
            $send();
            $data=json_decode($send->raw,true);
            if(json_last_error()){
                $this->error="{$this->name}: telegram's bot response is invalid format :  ".json_last_error_msg();
                return false;
            }

            if(empty($data['ok']) || !$data['ok']){
                $this->error="{$this->name}: telegram's bot response, report an error (code={$data['error_code']}) : ".$data['description'];
                return false;
            }
            
            foreach($data['result'] as $v){
                if(!\File::exists(OLDS.$v['update_id'].'.json')&&
                !\File::exists(UPDATES .$v['update_id'].'.json')){
                    \File::put(UPDATES .$v['update_id'].'.json',json_encode($v));
                    $this->info("new update fetched ({$v['update_id']})");
                    $last=$v['update_id'];
                }
            }
            if($this->option('serve')){
                $this->line('waiting for '.$this->option('delay').'\'s seconds...');
                sleep($this->option('delay'));
            }
        }while($this->option('serve'));
    }
}
