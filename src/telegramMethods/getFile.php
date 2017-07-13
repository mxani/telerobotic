<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getFile
 * Use this method to get basic info about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
 * Note: This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
 * @param file_id string File identifier to get info about
 */


class getFile extends telegramMethod{

    protected $name='getFile';

    protected $requireds=['file_id'=>'string'];

    protected $optionals=[];

}
