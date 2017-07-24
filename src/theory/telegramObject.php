<?php

namespace XB\theory;

use XB\theory\telegramMaterial;

abstract class telegramObject extends telegramMaterial{

    protected $allStatuses=['init','usable'];

    public function __toString(){
        return json_encode( $this->values). $this->error;
    }
}