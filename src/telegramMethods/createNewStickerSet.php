<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * createNewStickerSet
 * Use this method to create new sticker set owned by a user. The bot will be able to edit the created sticker set. Returns True on success.
 * @param user_id integer User identifier of created sticker set owner
 * @param name string Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only english letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in “_by_<bot username>”. <bot_username> is case insensitive. 1-64 characters.
 * @param title string Sticker set title, 1-64 characters
 * @param png_sticker InputFile or String Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files »
 * @param emojis string One or more emoji corresponding to the sticker
 * @param contains_masks boolean <b>Optional</b> Pass True, if a set of mask stickers should be created
 * @param mask_position MaskPosition <b>Optional</b> Position where the mask should be placed on faces
 * @return boolean
 */


class createNewStickerSet extends telegramMethod{

    protected $name='createNewStickerSet';

    protected $requireds=['user_id'=>'integer','name'=>'string','title'=>'string','png_sticker'=>'InputFile or String','emojis'=>'string'];

    protected $optionals=['contains_masks'=>'boolean','mask_position'=>'MaskPosition'];

    protected $returns=['boolean'];

}
