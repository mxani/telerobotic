<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Audio
 * This object represents an audio file to be treated as music by the Telegram clients.
 * @param file_id string Unique identifier for this file
 * @param duration integer Duration of the audio in seconds as defined by sender
 * @param performer string Optional. Performer of the audio as defined by sender or by audio tags
 * @param title string Optional. Title of the audio as defined by sender or by audio tags
 * @param mime_type string Optional. MIME type of the file as defined by sender
 * @param file_size integer Optional. File size
 */

class Audio extends telegramObject{

    protected $name='Audio';

    protected $requireds=['file_id'=>'string','duration'=>'integer'];

    protected $optionals=['performer'=>'string','title'=>'string','mime_type'=>'string','file_size'=>'integer'];

}
