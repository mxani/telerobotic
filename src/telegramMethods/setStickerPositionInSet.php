<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * setStickerPositionInSet
 * Use this method to move a sticker in a set created by the bot to a specific position . Returns True on success.
 * @param sticker string File identifier of the sticker
 * @param position integer New sticker position in the set, zero-based
 * @return boolean
 */


class setStickerPositionInSet extends telegramMethod{

    protected $name='setStickerPositionInSet';

    protected $requireds=['sticker'=>'string','position'=>'integer'];

    protected $optionals=[];

    protected $returns=['boolean'];

}
