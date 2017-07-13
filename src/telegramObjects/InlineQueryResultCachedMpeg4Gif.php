<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedMpeg4Gif
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers. By default, this animated MPEG-4 file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 * @param type string Type of the result, must be mpeg4_gif
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param mpeg4_file_id string A valid file identifier for the MP4 file
 * @param title string Optional. Title for the result
 * @param caption string Optional. Caption of the MPEG-4 file to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the video animation
 */

class InlineQueryResultCachedMpeg4Gif extends telegramObject{

    protected $name='InlineQueryResultCachedMpeg4Gif';

    protected $requireds=['type'=>'string','id'=>'string','mpeg4_file_id'=>'string'];

    protected $optionals=['title'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
