<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedAudio
 * Represents a link to an mp3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be audio
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param audio_file_id string A valid file identifier for the audio file
 * @param caption string Optional. Caption, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the audio
 */

class InlineQueryResultCachedAudio extends telegramObject{

    protected $name='InlineQueryResultCachedAudio';

    protected $requireds=['type'=>'string','id'=>'string','audio_file_id'=>'string'];

    protected $optionals=['caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
