<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * addStickerToSet
 * Use this method to add a new sticker to a set created by the bot. Returns True on success.
 * @param user_id integer User identifier of sticker set owner
 * @param name string Sticker set name
 * @param png_sticker InputFile or String Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files »
 * @param emojis string One or more emoji corresponding to the sticker
 * @param mask_position MaskPosition <b>Optional</b> Position where the mask should be placed on faces
 * @return boolean
 */


class addStickerToSet extends telegramMethod{

    protected $name='addStickerToSet';

    protected $requireds=['user_id'=>'integer','name'=>'string','png_sticker'=>'InputFile or String','emojis'=>'string'];

    protected $optionals=['mask_position'=>'MaskPosition'];

    protected $returns=['boolean'];

}
