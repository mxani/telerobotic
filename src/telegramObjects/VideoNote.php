<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * VideoNote
 * This object represents a video message (available in Telegram apps as of v.4.0).
 * @param file_id string Unique identifier for this file
 * @param length integer Video width and height as defined by sender
 * @param duration integer Duration of the video in seconds as defined by sender
 * @param thumb PhotoSize Optional. Video thumbnail
 * @param file_size integer Optional. File size
 */

class VideoNote extends telegramObject{

    protected $name='VideoNote';

    protected $requireds=['file_id'=>'string','length'=>'integer','duration'=>'integer'];

    protected $optionals=['thumb'=>'PhotoSize','file_size'=>'integer'];

}
