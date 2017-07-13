<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Animation
 * You can provide an animation for your game so that it looks stylish in chats (check out Lumberjack for an example). This object represents an animation file to be displayed in the message containing a game.
 * @param file_id string Unique file identifier
 * @param thumb PhotoSize Optional. Animation thumbnail as defined by sender
 * @param file_name string Optional. Original animation filename as defined by sender
 * @param mime_type string Optional. MIME type of the file as defined by sender
 * @param file_size integer Optional. File size
 */

class Animation extends telegramObject{

    protected $name='Animation';

    protected $requireds=['file_id'=>'string'];

    protected $optionals=['thumb'=>'PhotoSize','file_name'=>'string','mime_type'=>'string','file_size'=>'integer'];

}
