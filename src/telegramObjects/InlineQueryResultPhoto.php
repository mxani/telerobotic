<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultPhoto
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 * @param type string Type of the result, must be photo
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param photo_url string A valid URL of the photo. Photo must be in jpeg format. Photo size must not exceed 5MB
 * @param thumb_url string URL of the thumbnail for the photo
 * @param photo_width integer Optional. Width of the photo
 * @param photo_height integer Optional. Height of the photo
 * @param title string Optional. Title for the result
 * @param description string Optional. Short description of the result
 * @param caption string Optional. Caption of the photo to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the photo
 */

class InlineQueryResultPhoto extends telegramObject{

    protected $name='InlineQueryResultPhoto';

    protected $requireds=['type'=>'string','id'=>'string','photo_url'=>'string','thumb_url'=>'string'];

    protected $optionals=['photo_width'=>'integer','photo_height'=>'integer','title'=>'string','description'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
