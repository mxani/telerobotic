<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendVideo
 * Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param video InputFile or String Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. More info on Sending Files »
 * @param duration integer <b>Optional</b> Duration of sent video in seconds
 * @param width integer <b>Optional</b> Video width
 * @param height integer <b>Optional</b> Video height
 * @param caption string <b>Optional</b> Video caption (may also be used when resending videos by file_id), 0-200 characters
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 * @return Message
 */


class sendVideo extends telegramMethod{

    protected $name='sendVideo';

    protected $requireds=['chat_id'=>'Integer or String','video'=>'InputFile or String'];

    protected $optionals=['duration'=>'integer','width'=>'integer','height'=>'integer','caption'=>'string','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

    protected $returns=['Message'];

}
