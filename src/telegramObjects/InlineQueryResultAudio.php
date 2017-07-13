<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultAudio
 * Represents a link to an mp3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be audio
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param audio_url string A valid URL for the audio file
 * @param title string Title
 * @param caption string Optional. Caption, 0-200 characters
 * @param performer string Optional. Performer
 * @param audio_duration integer Optional. Audio duration in seconds
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the audio
 */

class InlineQueryResultAudio extends telegramObject{

    protected $name='InlineQueryResultAudio';

    protected $requireds=['type'=>'string','id'=>'string','audio_url'=>'string','title'=>'string'];

    protected $optionals=['caption'=>'string','performer'=>'string','audio_duration'=>'integer','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
