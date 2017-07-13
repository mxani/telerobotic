<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedVideo
 * Represents a link to a video file stored on the Telegram servers. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 * @param type string Type of the result, must be video
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param video_file_id string A valid file identifier for the video file
 * @param title string Title for the result
 * @param description string Optional. Short description of the result
 * @param caption string Optional. Caption of the video to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the video
 */

class InlineQueryResultCachedVideo extends telegramObject{

    protected $name='InlineQueryResultCachedVideo';

    protected $requireds=['type'=>'string','id'=>'string','video_file_id'=>'string','title'=>'string'];

    protected $optionals=['description'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
