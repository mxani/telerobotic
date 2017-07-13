<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Video
 * This object represents a video file.
 * @param file_id string Unique identifier for this file
 * @param width integer Video width as defined by sender
 * @param height integer Video height as defined by sender
 * @param duration integer Duration of the video in seconds as defined by sender
 * @param thumb PhotoSize Optional. Video thumbnail
 * @param mime_type string Optional. Mime type of a file as defined by sender
 * @param file_size integer Optional. File size
 */

class Video extends telegramObject{

    protected $name='Video';

    protected $requireds=['file_id'=>'string','width'=>'integer','height'=>'integer','duration'=>'integer'];

    protected $optionals=['thumb'=>'PhotoSize','mime_type'=>'string','file_size'=>'integer'];

}
