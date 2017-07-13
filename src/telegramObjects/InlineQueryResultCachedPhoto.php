<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedPhoto
 * Represents a link to a photo stored on the Telegram servers. By default, this photo will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 * @param type string Type of the result, must be photo
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param photo_file_id string A valid file identifier of the photo
 * @param title string Optional. Title for the result
 * @param description string Optional. Short description of the result
 * @param caption string Optional. Caption of the photo to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the photo
 */

class InlineQueryResultCachedPhoto extends telegramObject{

    protected $name='InlineQueryResultCachedPhoto';

    protected $requireds=['type'=>'string','id'=>'string','photo_file_id'=>'string'];

    protected $optionals=['title'=>'string','description'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
