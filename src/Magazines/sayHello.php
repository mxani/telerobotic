<?php

namespace App\Magazines;

use XB\theory\Magazine;
use XB\telegramMethods\sendMessage;

class sayHello extends Magazine{
    public function main(){
        $send=new sendMessage([
            'chat_id'=>153808949,
            'text'=>"===========\nHELLO. 🤝\n===========",
            'parse_mode'=>'html',
        ]);
        $send();
    }

}