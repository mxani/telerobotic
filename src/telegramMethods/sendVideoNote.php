<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendVideoNote
 * As of v.4.0, Telegram clients support rounded square mp4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param video_note InputFile or String Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. More info on Sending Files ». Sending video notes by a URL is currently unsupported
 * @param duration integer <b>Optional</b> Duration of sent video in seconds
 * @param length integer <b>Optional</b> Video width and height
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */


class sendVideoNote extends telegramMethod{

    protected $name='sendVideoNote';

    protected $requireds=['chat_id'=>'Integer or String','video_note'=>'InputFile or String'];

    protected $optionals=['duration'=>'integer','length'=>'integer','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

}
