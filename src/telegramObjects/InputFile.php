<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InputFile
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */

class InputFile extends telegramObject{

    protected $name='InputFile';

    protected $requireds=[];

    protected $optionals=[];

}
