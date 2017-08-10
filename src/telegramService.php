<?php

namespace XB;

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
            $files=\File::allFiles('storage/bizinehRud/updates');
            foreach($files as $file){

                if(\File::size($file)>20000){
                    \File::delete($file);
                    continue;
                }

                $data=\File::get($file);
                $json=json_decode($data,true);
                if(json_last_error()){
                    \File::delete($file);
                    continue;
                }

                // echo "new update $file found.\n";
                // $this->info("$data\n\n");

                $shoot=new Shoot(new Update($json,'object'));

                $shoot->load();

                $shoot->fire();

                \File::move($file,str_replace('updates','olds',$file));

                // Shoot::$result;
            }
        }
        while($this->option('serve'));
    }
}
