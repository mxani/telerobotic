<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Voice
 * This object represents a voice note.
 * @param file_id string Unique identifier for this file
 * @param duration integer Duration of the audio in seconds as defined by sender
 * @param mime_type string Optional. MIME type of the file as defined by sender
 * @param file_size integer Optional. File size
 */

class Voice extends telegramObject{

    protected $name='Voice';

    protected $requireds=['file_id'=>'string','duration'=>'integer'];

    protected $optionals=['mime_type'=>'string','file_size'=>'integer'];

}
