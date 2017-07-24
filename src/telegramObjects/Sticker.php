<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Sticker
 * This object represents a sticker.
 * @param file_id string Unique identifier for this file
 * @param width integer Sticker width
 * @param height integer Sticker height
 * @param thumb PhotoSize Optional. Sticker thumbnail in the .webp or .jpg format
 * @param emoji string Optional. Emoji associated with the sticker
 * @param set_name string Optional. Name of the sticker set to which the sticker belongs
 * @param mask_position MaskPosition Optional. For mask stickers, the position where the mask should be placed
 * @param file_size integer Optional. File size
 */

class Sticker extends telegramObject{

    protected $name='Sticker';

    protected $requireds=['file_id'=>'string','width'=>'integer','height'=>'integer'];

    protected $optionals=['thumb'=>'PhotoSize','emoji'=>'string','set_name'=>'string','mask_position'=>'MaskPosition','file_size'=>'integer'];

}
