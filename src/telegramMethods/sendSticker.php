<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendSticker
 * Use this method to send .webp stickers. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param sticker InputFile or String Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .webp file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files »
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */


class sendSticker extends telegramMethod{

    protected $name='sendSticker';

    protected $requireds=['chat_id'=>'Integer or String','sticker'=>'InputFile or String'];

    protected $optionals=['disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

}
