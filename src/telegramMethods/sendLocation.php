<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendLocation
 * Use this method to send point on the map. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param latitude double Latitude of location
 * @param longitude double Longitude of location
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 * @return Message
 */


class sendLocation extends telegramMethod{

    protected $name='sendLocation';

    protected $requireds=['chat_id'=>'Integer or String','latitude'=>'double','longitude'=>'double'];

    protected $optionals=['disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

    protected $returns=['Message'];

}
