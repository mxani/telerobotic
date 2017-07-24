<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * StickerSet
 * This object represents a sticker set.
 * @param name string Sticker set name
 * @param title string Sticker set title
 * @param contains_masks boolean True, if the sticker set contains masks
 * @param stickers Array of Sticker List of all set stickers
 */

class StickerSet extends telegramObject{

    protected $name='StickerSet';

    protected $requireds=['name'=>'string','title'=>'string','contains_masks'=>'boolean','stickers'=>'Array of Sticker'];

    protected $optionals=[];

}
