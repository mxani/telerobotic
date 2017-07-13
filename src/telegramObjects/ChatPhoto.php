<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * ChatPhoto
 * This object represents a chat photo.
 * @param small_file_id string Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
 * @param big_file_id string Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
 */

class ChatPhoto extends telegramObject{

    protected $name='ChatPhoto';

    protected $requireds=['small_file_id'=>'string','big_file_id'=>'string'];

    protected $optionals=[];

}
