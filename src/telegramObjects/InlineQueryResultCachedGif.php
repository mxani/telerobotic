<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedGif
 * Represents a link to an animated GIF file stored on the Telegram servers. By default, this animated GIF file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with specified content instead of the animation.
 * @param type string Type of the result, must be gif
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param gif_file_id string A valid file identifier for the GIF file
 * @param title string Optional. Title for the result
 * @param caption string Optional. Caption of the GIF file to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the GIF animation
 */

class InlineQueryResultCachedGif extends telegramObject{

    protected $name='InlineQueryResultCachedGif';

    protected $requireds=['type'=>'string','id'=>'string','gif_file_id'=>'string'];

    protected $optionals=['title'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
