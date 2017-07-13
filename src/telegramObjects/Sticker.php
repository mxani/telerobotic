<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Sticker
 * This object represents a sticker.
 * @param file_id string Unique identifier for this file
 * @param width integer Sticker width
 * @param height integer Sticker height
 * @param thumb PhotoSize Optional. Sticker thumbnail in .webp or .jpg format
 * @param emoji string Optional. Emoji associated with the sticker
 * @param file_size integer Optional. File size
 */

class Sticker extends telegramObject{

    protected $name='Sticker';

    protected $requireds=['file_id'=>'string','width'=>'integer','height'=>'integer'];

    protected $optionals=['thumb'=>'PhotoSize','emoji'=>'string','file_size'=>'integer'];

}
