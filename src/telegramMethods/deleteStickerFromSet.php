<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * deleteStickerFromSet
 * Use this method to delete a sticker from a set created by the bot. Returns True on success.
 * @param sticker string File identifier of the sticker
 * @return boolean
 */


class deleteStickerFromSet extends telegramMethod{

    protected $name='deleteStickerFromSet';

    protected $requireds=['sticker'=>'string'];

    protected $optionals=[];

    protected $returns=['boolean'];

}
