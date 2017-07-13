<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedVoice
 * Represents a link to a voice message stored on the Telegram servers. By default, this voice message will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the voice message.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be voice
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param voice_file_id string A valid file identifier for the voice message
 * @param title string Voice message title
 * @param caption string Optional. Caption, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the voice message
 */

class InlineQueryResultCachedVoice extends telegramObject{

    protected $name='InlineQueryResultCachedVoice';

    protected $requireds=['type'=>'string','id'=>'string','voice_file_id'=>'string','title'=>'string'];

    protected $optionals=['caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
