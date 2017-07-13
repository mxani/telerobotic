<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendVenue
 * Use this method to send information about a venue. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param latitude double Latitude of the venue
 * @param longitude double Longitude of the venue
 * @param title string Name of the venue
 * @param address string Address of the venue
 * @param foursquare_id string <b>Optional</b> Foursquare identifier of the venue
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */


class sendVenue extends telegramMethod{

    protected $name='sendVenue';

    protected $requireds=['chat_id'=>'Integer or String','latitude'=>'double','longitude'=>'double','title'=>'string','address'=>'string'];

    protected $optionals=['foursquare_id'=>'string','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

}
