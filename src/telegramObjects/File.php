<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * File
 * This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 * 
Maximum file size to download is 20 MB

 * @param file_id string Unique identifier for this file
 * @param file_size integer Optional. File size, if known
 * @param file_path string Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
 */

class File extends telegramObject{

    protected $name='File';

    protected $requireds=['file_id'=>'string'];

    protected $optionals=['file_size'=>'integer','file_path'=>'string'];

}
