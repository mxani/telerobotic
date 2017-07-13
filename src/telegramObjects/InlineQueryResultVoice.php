<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultVoice
 * Represents a link to a voice recording in an .ogg container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the the voice message.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be voice
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param voice_url string A valid URL for the voice recording
 * @param title string Recording title
 * @param caption string Optional. Caption, 0-200 characters
 * @param voice_duration integer Optional. Recording duration in seconds
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the voice recording
 */

class InlineQueryResultVoice extends telegramObject{

    protected $name='InlineQueryResultVoice';

    protected $requireds=['type'=>'string','id'=>'string','voice_url'=>'string','title'=>'string'];

    protected $optionals=['caption'=>'string','voice_duration'=>'integer','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
