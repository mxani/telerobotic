<?php

namespace XB\theory;

use XB\telegramObjects\Update;

class Shoot{
    public function __construct(Update $update){
        $this->update=$update;
    }

    private $update,$result,$share=[];

    private $equped=[],$default;

    public function trigger($trig,$fire){
        if(is_string($fire)){
            $fire="App\\Magazines\\$fire@";
            list($magazine,$cartridge)=explode('@',$fire);
            $cartridge=$cartridge?$cartridge:'main';
            if(!method_exists($magazine,$cartridge)){
                $trace = debug_backtrace();
                trigger_error(
                    "$magazine magazine or $cartridge cartridge dose not exists" .
                    ' in ' . $trace[0]['file'] .
                    ' on line ' . $trace[0]['line'],
                    E_USER_NOTICE);
            }

            $fire=['magazine'=>$magazine,'cartridge'=>$cartridge];
        }

        ///< other validation of $trig and $fire
        if(is_string($trig)){
            switch($trig){
                case 'default':$this->default= $fire;break;
            }
            return;
        }
        if($trig instanceof \Closure && $trig($this->update,$this->share)){
            $this->equped[]= $fire;
        }
    }

    public function fire(){
        if(empty($this->equped) ){
            $this->flint($this->default);
            return;
        }
        foreach($this->equped as $k => $v){
            $this->flint($v);
        }
    }

    public function flint($powder){
        if($powder instanceof \Closure){
            return $powder($this->update,$this->share);
        }else{
            extract($powder);
            $magazine=new $magazine;
            return $magazine->$cartridge($this->update,$this->share);
        }
    }

    public function load(){
        require(base_path('routes/telegram.php'));
    }
}
