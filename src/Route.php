<?php

use xani\bizinehRud\telegramCtrl;

Route::get('telegram', telegramCtrl::class.'@index');
