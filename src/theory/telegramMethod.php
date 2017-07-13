<?php

namespace XB\theory;

use XB\theory\telegramMaterial;
use GuzzleHttp\Client;


abstract class telegramMethod extends telegramMaterial{
    
    protected $allStatuses=['init','calling','end'];

    public function __construct(array $para=[]){
        // var_dump($para);
        return parent::__construct($para,true);
    }

    public $raw;

    public function __invoke(){
        if(!is_null($this->error)){
            return false;
        }

        // return $this->values;

        $client = new Client();
        $response=$client->request(
            'POST', 
            config('XBtelegram.bot-url').config('XBtelegram.bot-token').'/'.$this->name, 
            ['form_params' =>$this->values]
        );
        $this->raw= $response->getBody()->getContents();

        return $this->raw;
    }
}