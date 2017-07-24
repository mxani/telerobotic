<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendContact
 * Use this method to send phone contacts. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param phone_number string Contact's phone number
 * @param first_name string Contact's first name
 * @param last_name string <b>Optional</b> Contact's last name
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove keyboard or to force a reply from the user.
 * @return Message
 */


class sendContact extends telegramMethod{

    protected $name='sendContact';

    protected $requireds=['chat_id'=>'Integer or String','phone_number'=>'string','first_name'=>'string'];

    protected $optionals=['last_name'=>'string','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

    protected $returns=['Message'];

}
