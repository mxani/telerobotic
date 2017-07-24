<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getStickerSet
 * Use this method to get a sticker set. On success, a StickerSet object is returned.
 * @param name string Name of the sticker set
 * @return StickerSet
 */


class getStickerSet extends telegramMethod{

    protected $name='getStickerSet';

    protected $requireds=['name'=>'string'];

    protected $optionals=[];

    protected $returns=['StickerSet'];

}
