<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Document
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 * @param file_id string Unique file identifier
 * @param thumb PhotoSize Optional. Document thumbnail as defined by sender
 * @param file_name string Optional. Original filename as defined by sender
 * @param mime_type string Optional. MIME type of the file as defined by sender
 * @param file_size integer Optional. File size
 */

class Document extends telegramObject{

    protected $name='Document';

    protected $requireds=['file_id'=>'string'];

    protected $optionals=['thumb'=>'PhotoSize','file_name'=>'string','mime_type'=>'string','file_size'=>'integer'];

}
