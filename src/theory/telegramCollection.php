<?php

namespace XB\theory;

use XB\theory\telegramMaterial;

class telegramCollection extends telegramMaterial
implements \ArrayAccess{
    protected $allStatuses=['init','usable'];
    protected $name='collection';

    public function __construct(array $para=[], $type='array'){
        if(!empty($this->error)){
            return false;
        }
        if(empty($this->name)){
            $this->error=__class__.' the name is invalid';
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
                    $this->saveByType($k,$para[$k],$type);
                }
                
            }else{
                $types[]='unkown';
            }
        }
        $types=array_unique($types);
        $this->name='Array of '.(count($types)==1?$types[0]:'Mix');
        switch(count($types)){
            case 0:$this->name= 'Empty';break;
            case 1:$this->name='Array of '.$types[0];break;
            default: $this->name='Array of Mix';
        }

        $this->status++;
        return $this;
    }

    public function __toString(){
        return json_encode( $this->values);
    }

    public function count(){
        return count($this->values);
    }

    public function each(\Closure $callback){
        foreach($this->values as $k =>$v){
            $this->values[$k]=$callback($v,$k);
        }
        return $this;
    }

    public function offsetSet($offset,$value){
        $trace = debug_backtrace();
        trigger_error(
            'telegram Elements properties was ReadOnly :  '.$offset.
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return $value;
    }

    public function offsetExists($offset) {
        return isset($this->values[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->values[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->values[$offset]) ? $this->values[$offset] : null;
    }
}