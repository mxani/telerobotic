<?php
use XB\theory\Shoot;

$this->trigger(function($u){
    return $u->message->text=='hi test';
},function($u){
    $send=new XB\telegramMethods\sendMessage([
        'chat_id'=>153808949,
        'text'=>'<b>test success.</b>',
        'parse_mode'=>'html',
    ]);
    $send() or print 'error:'.$send->getError();
});

$this->trigger(function($u){return true;},'sayHello@test')
