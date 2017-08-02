<?php

namespace XB\theory;

abstract class telegramMaterial{
    protected $error=null;
    protected $allStatuses=[];

    protected $status=0;

    public function getStatus(){
        return [
            'status'=>$this->allStatuses[$this->status],
            'statusCode'=>$this->status,
            'error'=>$this->error,
        ];
    }

    public function type(){
        return $this->name;
    }

    protected $name;

    protected $requireds=[];

    protected $optionals=[];

    protected $values=[];

    public function __construct(array $para=[],$type='array'){
        if(!empty($this->error)){
            return false;
        }
        if(empty($this->name)){
            $this->error=__class__.' the name is invalid';
            return false;
        }

        foreach($this->requireds as $k => $v){
            if(!isset($para[$k])){
                $this->error="{$this->name}: the $k property is requiered";
                return false;
            }

            if(($scalar=is_scalar($para[$k]))
             && array_search(gettype($para[$k]),explode(' or ',$v))){
                $this->error="{$this->name}: the $k property, must be $v Scalar";
                return false;
            }

            if(!$scalar && is_array($para[$k])){
                if($para[$k]===array_values($para[$k])){
                    if(stristr($v,'array of ')===false){
                        $this->error="{$this->name}: unexpected collection (array) ";
                        return false;
                    }

                    $elems=[];
                    $class='XB\telegramObjects\\'.str_ireplace('array of ','',$v);
                    foreach($para[$k] as $elm){
                        $elems[]=new $class($elm,$type);
                    }
                    $para[$k]= new telegramCollection($elems,$type);
                }else{
                    $class='XB\telegramObjects\\'.$v;
                    if(!class_exists($class)){
                        $this->error="{$this->name}: the $class telegram object dose not exists";
                        return false;
                    }
                    $para[$k]=new $class($para[$k],$type);
                }
            }
            
            if(!$scalar 
            && (!$para[$k] instanceof telegramMaterial 
            || array_search($para[$k]->type(),explode(' or ',$v)))){
                $this->error="{$this->name}: the $k property must be $v Object";
                return false;
            }

            ///< other input validation rules required.

            if($scalar){
                $this->values[$k]=$para[$k];
            }else{
                $status=$para[$k]->getStatus();
                if(!empty($status['error'])){
                    $this->error="{$this->name}: the $k property have an error ([{$status['error']}])";
                    return false;
                }elseif($status['statusCode']==0){
                    $this->error="{$this->name}: the $k property not initialized";
                    return false;
                }else{
                    $this->saveByType($k,$para[$k],$type);
                }
            }
        }

        foreach($this->optionals as $k => $v){
            if(!isset($para[$k])){
                continue;
            }

            if(($scalar=is_scalar($para[$k])) 
            && array_search(gettype($para[$k]),explode(' or ',$v))){
                $this->error="{$this->name}: the $k property is scalar, must be $v";
                return false;
            }

            if(!$scalar && is_array($para[$k])){
                if($para[$k]===array_values($para[$k])){
                    if(stristr($v,'array of ')===false){
                        $this->error="{$this->name}: unexpected collection (array) ";
                        return false;
                    }

                    $elems=[];
                    $class='XB\telegramObjects\\'.str_ireplace('array of ','',$v);
                    foreach($para[$k] as $elm){
                        $elems[]=new $class($elm,$type);
                    }
                    $para[$k]= new telegramCollection($elems,$type);
                }else{
                    $class='XB\telegramObjects\\'.$v;
                    if(!class_exists($class)){
                        $this->error="{$this->name}: the $class telegram object dose not exists";
                        return false;
                    }
                    $para[$k]=new $class($para[$k],$type);
                }
            }
            
            if(!$scalar 
            && (!$para[$k] instanceof telegramMaterial 
            || array_search($para[$k]->type(),explode(' or ',$v)))){
                $this->error="{$this->name}: the $k property must be $v";
                return false;
            }

            ///< other input validation rules required.

            if($scalar){
                $this->values[$k]=$para[$k];
            }else{
                $status=$para[$k]->getStatus();
                if(!empty($status['error'])){
                    $this->error="{$this->name}: the $k property have an error ([{$status['error']}])";
                    return false;
                }elseif($status['statusCode']==0){
                    $this->error="{$this->name}: the $k property not initialized";
                    return false;
                }else{
                    $this->saveByType($k,$para[$k],$type);
                }
            }
        }

        if(!empty($this->error)){
            return false;
        }
        
        $this->status++;
        return $this;
    }

    public function __invoke(){
        return $this->values;
    }

    public function call(){
        return $this->__invoke();
    }

    public function getError(){
        return $this->error;
    }

    public function __get($name){
        if (array_key_exists($name, $this->values)) {
            return $this->values[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __set($name,$value){
        // throw new \Exception('asdf');
        $trace = debug_backtrace();
        trigger_error(
            'telegram Elements properties was ReadOnly :  '.$name.
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return $value;
    }

    public function __isset($name){
        return isset($this->values[$name]);
    }

    public function __debugInfo() {
        return $this->values;
    }

    protected function saveByType($key,&$value,$type){
        switch($type){
            case 'json': $this->values[$key]="$value";break;
            case 'object': $this->values[$key]=$value;break;
            case 'array': 
            default :$this->values[$key]=$value();
        }
    }
}
