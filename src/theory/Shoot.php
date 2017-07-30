<?php

namespace XB\theory;

use XB\telegramObjects\Update;

class Shoot{
    public function __construct($trig,$fire){
        
        $share=[];
        if($trig(self::$update,$share)){
            if($fire instanceof \Closure){
                $this->result= $fire(self::$update,$share);
            }else{
                $this->result= 'else';
            }
        }
    }

    public static $update;

    private Static $equped=[],$share=[];

    public static $result;

    public static function trigger($trig,$fire){
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

        if($trig(self::$update,self::$share)){
            self::$equped[]= $fire;
        }
    }

    public static function fire(){
        foreach(self::$equped as $k => $v){
            if($v instanceof \Closure){
                self::$equped[$k]=$v(self::$update,self::$share);
            }else{
                extract($v);
                $magazine=new $magazine;
                self::$equped[$k]=
                $magazine->$cartridge(self::$update,self::$share);
            }
        }
    }

    public static function load(){
        require_once(base_path('routes/telegram.php'));
    }
}