<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * PhotoSize
 * This object represents one size of a photo or a file / sticker thumbnail.
 * @param file_id string Unique identifier for this file
 * @param width integer Photo width
 * @param height integer Photo height
 * @param file_size integer Optional. File size
 */

class PhotoSize extends telegramObject{

    protected $name='PhotoSize';

    protected $requireds=['file_id'=>'string','width'=>'integer','height'=>'integer'];

    protected $optionals=['file_size'=>'integer'];

}
