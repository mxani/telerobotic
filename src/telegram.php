<?php
use XB\theory\Shoot;

Shoot::trigger(function($u){
    return $u->message->text=='hi test';
},function($u){
    $send=new XB\telegramMethods\sendMessage([
        'chat_id'=>153808949,
        'text'=>'<b>test success.</b>',
        'parse_mode'=>'html',
    ]);
    $send() or print 'error:'.$send->getError();
});

Shoot::trigger(function($u){return true;},'sayHello');