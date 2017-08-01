<?php

use XB\telegramCtrl;
use XB\theory\Shoot;
use XB\telegramObjects\Update;
// use XB\telegramMethods\getUpdates;

Route::post('telegram/webhook',function(){

    $data=json_decode(file_get_contents('php://input'),true);

    if(json_last_error()){
        $trace = debug_backtrace();
            trigger_error(
                "{$this->name}: telegram's bot response is invalid format :  ".json_last_error_msg() .
                ' in ' . $trace[0]['file'] .
                ' on line ' . $trace[0]['line'],
                E_USER_NOTICE);
        return false;
    }


    Shoot::$update=new XB\telegramObjects\Update($data,'object');

    Shoot::load();

    Shoot::fire();

    return Shoot::$result;
    return 'res:   '.file_get_contents('php://input');
});

Route::get('telegram/getUpdate',function(){
    $o=new XB\telegramMethods\getUpdates(['offset'=>-1]);
    if(!$o()){
        return "error:".$o->getError();
    }else{
        // global $input;
        // $input=$o->result[0];
        if(empty($o->result[0])|| ! $o->result[0] instanceof Update){
            $trace = debug_backtrace();
            trigger_error(
                'update not initialized.' .
                ' in ' . $trace[0]['file'] .
                ' on line ' . $trace[0]['line'],
                E_USER_NOTICE);
        }
        Shoot::$update=$o->result[0];

        Shoot::load();

        Shoot::fire();

        return Shoot::$result;

        
        return Shoot::trigger(function($u,&$s){
            $s['joke']='yes';
            // $u->a=5;
            return true;
        },function($u,$s){
            return $s['joke'];
        });

        return $o->result->each(function($item){
            return ($item->message->from);
        });
    }
});
