<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * uploadStickerFile
 * Use this method to upload a .png file with a sticker for later use in createNewStickerSet and addStickerToSet methods (can be used multiple times). Returns the uploaded File on success.
 * @param user_id integer User identifier of sticker file owner
 * @param png_sticker InputFile Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. More info on Sending Files »
 * @return File
 */


class uploadStickerFile extends telegramMethod{

    protected $name='uploadStickerFile';

    protected $requireds=['user_id'=>'integer','png_sticker'=>'InputFile'];

    protected $optionals=[];

    protected $returns=['File'];

}
