<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedSticker
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be sticker
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param sticker_file_id string A valid file identifier of the sticker
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the sticker
 */

class InlineQueryResultCachedSticker extends telegramObject{

    protected $name='InlineQueryResultCachedSticker';

    protected $requireds=['type'=>'string','id'=>'string','sticker_file_id'=>'string'];

    protected $optionals=['reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
