<?php

namespace XB\Commands;

use Illuminate\Console\Command;
use XB\theory\Shoot;
use XB\telegramObjects\Update;
use App\User;

class telegramService extends Command
{
    protected $signature = 'telegram:run {--serve}';
    protected $description = 'telegram !!!';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        do{
            $files=\Storage::allFiles('updates');
            foreach($files as $file){

                if(\Storage::size($file)>5000){
                    \Storage::delete($file);
                    continue;
                }

                $data=\Storage::get($file);
                $json=json_decode($data,true);
                if(json_last_error()){
                    \Storage::delete($file);
                    continue;
                }

                // echo "new update $file found.\n";
                // $this->info("$data\n\n");

                $shoot=new Shoot(new Update($json,'object'));

                $shoot->load();

                $shoot->fire();

                \Storage::delete($file);

                // Shoot::$result;
            }
        }
        while($this->option('serve'));
    }
}
