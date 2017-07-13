<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultGif
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 * @param type string Type of the result, must be gif
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param gif_url string A valid URL for the GIF file. File size must not exceed 1MB
 * @param gif_width integer Optional. Width of the GIF
 * @param gif_height integer Optional. Height of the GIF
 * @param gif_duration integer Optional. Duration of the GIF
 * @param thumb_url string URL of the static thumbnail for the result (jpeg or gif)
 * @param title string Optional. Title for the result
 * @param caption string Optional. Caption of the GIF file to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the GIF animation
 */

class InlineQueryResultGif extends telegramObject{

    protected $name='InlineQueryResultGif';

    protected $requireds=['type'=>'string','id'=>'string','gif_url'=>'string','thumb_url'=>'string'];

    protected $optionals=['gif_width'=>'integer','gif_height'=>'integer','gif_duration'=>'integer','title'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
