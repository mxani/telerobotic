<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendAudio
 * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .mp3 format. On success, the sent Message is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
 * For sending voice messages, use the sendVoice method instead.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param audio InputFile or String Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files »
 * @param caption string <b>Optional</b> Audio caption, 0-200 characters
 * @param duration integer <b>Optional</b> Duration of the audio in seconds
 * @param performer string <b>Optional</b> Performer
 * @param title string <b>Optional</b> Track name
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */


class sendAudio extends telegramMethod{

    protected $name='sendAudio';

    protected $requireds=['chat_id'=>'Integer or String','audio'=>'InputFile or String'];

    protected $optionals=['caption'=>'string','duration'=>'integer','performer'=>'string','title'=>'string','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

}
