<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendPhoto
 * Use this method to send photos. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param photo InputFile or String Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. More info on Sending Files »
 * @param caption string <b>Optional</b> Photo caption (may also be used when resending photos by file_id), 0-200 characters
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 * @return Message
 */


class sendPhoto extends telegramMethod{

    protected $name='sendPhoto';

    protected $requireds=['chat_id'=>'Integer or String','photo'=>'InputFile or String'];

    protected $optionals=['caption'=>'string','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

    protected $returns=['Message'];

}
