<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultVideo
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 * @param type string Type of the result, must be video
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param video_url string A valid URL for the embedded video player or video file
 * @param mime_type string Mime type of the content of video url, “text/html” or “video/mp4”
 * @param thumb_url string URL of the thumbnail (jpeg only) for the video
 * @param title string Title for the result
 * @param caption string Optional. Caption of the video to be sent, 0-200 characters
 * @param video_width integer Optional. Video width
 * @param video_height integer Optional. Video height
 * @param video_duration integer Optional. Video duration in seconds
 * @param description string Optional. Short description of the result
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the video
 */

class InlineQueryResultVideo extends telegramObject{

    protected $name='InlineQueryResultVideo';

    protected $requireds=['type'=>'string','id'=>'string','video_url'=>'string','mime_type'=>'string','thumb_url'=>'string','title'=>'string'];

    protected $optionals=['caption'=>'string','video_width'=>'integer','video_height'=>'integer','video_duration'=>'integer','description'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
