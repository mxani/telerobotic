<?php

namespace XB\theory;

use XB\theory\telegramMaterial;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


abstract class telegramMethod extends telegramMaterial{
    
    protected $allStatuses=['init','calling','end'];

    public function __construct(array $para=[]){
        // var_dump($para);
        if(empty($this->returns)){
            $this->error="{$this->name}: returns value don't set".json_last_error_msg();
            return false;
        }
        return parent::__construct($para,'json');
    }

    public $raw,$result;

    public function __invoke($justRaw=false){
        if(!is_null($this->error)){
            return false;
        }

        // return $this->values;

        $client = new Client();
	try{
            $response=$client->request(
            	'POST', 
            	config('XBtelegram.bot-url').config('XBtelegram.bot-token').'/'.$this->name, 
            	['form_params' =>$this->values]
            );
	    $this->raw= $response->getBody()->getContents();
	} catch (ClientException $e) {
 //   echo \Psr7\str($e->getRequest());
 //   echo \Psr7\str($e->getResponse());
	$this->raw="{}";
	return false;
}
        if($justRaw){
            return $this->raw;
        }

        $data=json_decode($this->raw,true);
        if(json_last_error()){
            $this->error="{$this->name}: telegram's bot response is invalid format :  ".json_last_error_msg();
            return false;
        }

        if(empty($data['ok']) || !$data['ok']){
            $this->error="{$this->name}: telegram's bot response, report an error (code={$data['error_code']}) : ".$data['description'];
            return false;
        }

        if(is_scalar($data['result'])){
            if(false!==array_search(gettype($data['result']),['integer'])){
                return $this->result=$data['result'];
            }
            $this->error="{$this->name}: telegram's bot response, ronge data type returend. expected ".
            implode(' or ',$this->returns)." , but recerved ".gettype($data['result']);
            return false;
        }
        
        ///> remove scalars. 
        $this->returns= array_filter($this->returns,function($item){
            return false===array_search($item,['integer','boolean','double','string']);
        });

        if(count($this->returns)!=1){
            $this->error="{$this->name}: multiple return type";
            return false;
        }
        
        if(is_array($data['result'])){
            if($data['result']===array_values($data['result'])){//check array is sequential
                if(stristr($this->returns[0],'array of ')===false){
                    $this->error="{$this->name}: unexpected collection (array) ";
                    return false;
                }

                $elems=[];
                $class='XB\telegramObjects\\'.str_ireplace('array of ','',$this->returns[0]);
                foreach($data['result'] as $elm){
                    $elems[]=new $class($elm,'object');
                }
                return $this->result= new telegramCollection($elems,'object');
            }else{// associcative
                $class='XB\telegramObjects\\'.$this->returns[0];
                return $this->result= new $class($data['result'],'object');
            }
        }

        // return $this->raw;
        $this->error="{$this->name}: telegram's bot response, ronge data type returend ";
        return false;
    }
}
