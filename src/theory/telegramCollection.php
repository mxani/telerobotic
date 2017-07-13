<?php

namespace XB\theory;

use XB\theory\telegramMaterial;

class telegramCollection extends telegramMaterial{
    protected $allStatuses=['init','usable'];
    protected $name='collection';

    public function __construct(array $para=[], $json=false){
        if(!empty($this->error)){
            return false;
        }
        if(empty($this->name)){
            $this->error=__class__.' the name is invalid';
            return false;
        }

        if(empty($para)){
            $this->error="{$this->name}: a Collection can not be empty";
            return false;
        }

        $types=[];
        foreach($para as $k => $v){
            if(is_scalar($v)){
                $types[]=gettype($v);
                $this->values[]=$v;
            }elseif($v instanceof telegramMaterial){
                $status=$para[$k]->getStatus();
                if(!empty($status['error'])){
                    $this->error="{$this->name}: the $k property have an error ([{$status['error']}])";
                    return false;
                }elseif($status['statusCode']==0){
                    $this->error="{$this->name}: the $k property not initialized";
                    return false;
                }else{
                    $types[]=$v->type();
                    $this->values[]=$json?"$v":$v();
                }
                
            }else{
                $types[]='unkown';
            }
        }
        $types=array_unique($types);
        $this->name='Array of '.(count($types)==1?$types[0]:'Mix');

        $this->status++;
        return $this;
    }

    
}