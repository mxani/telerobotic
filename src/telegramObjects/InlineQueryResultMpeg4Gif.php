<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultMpeg4Gif
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 * @param type string Type of the result, must be mpeg4_gif
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param mpeg4_url string A valid URL for the MP4 file. File size must not exceed 1MB
 * @param mpeg4_width integer Optional. Video width
 * @param mpeg4_height integer Optional. Video height
 * @param mpeg4_duration integer Optional. Video duration
 * @param thumb_url string URL of the static thumbnail (jpeg or gif) for the result
 * @param title string Optional. Title for the result
 * @param caption string Optional. Caption of the MPEG-4 file to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the video animation
 */

class InlineQueryResultMpeg4Gif extends telegramObject{

    protected $name='InlineQueryResultMpeg4Gif';

    protected $requireds=['type'=>'string','id'=>'string','mpeg4_url'=>'string','thumb_url'=>'string'];

    protected $optionals=['mpeg4_width'=>'integer','mpeg4_height'=>'integer','mpeg4_duration'=>'integer','title'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
