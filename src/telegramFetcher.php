<?php

namespace XB;

use Illuminate\Console\Command;
use XB\telegramMethods\deleteWebhook;
use XB\telegramMethods\getUpdates;

class telegramFetcher extends Command
{
    protected $signature = 'telegram:fetcher {--serve} {--last} {--delay=3}';
    protected $description = 'fetching new update by getUpdate';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        (new deleteWebhook())->call();
        $last=$this->option('last')?-1:1;
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
                if(!\File::exists('storage/bizinehRud/olds/'.$v['update_id'])&&
                !\File::exists('storage/bizinehRud/updates/'.$v['update_id'])){
                    \File::put('storage/bizinehRud/updates/'.$v['update_id'],json_encode($v));
                    $this->info("new update fetched ({$v['update_id']})");
                }
            }
            if($this->option('serve')){
                $this->line('waiting for '.$this->option('delay').'\'s seconds...');
                sleep($this->option('delay'));
            }
        }while($this->option('serve'));
    }
}
