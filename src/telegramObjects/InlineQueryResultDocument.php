<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultDocument
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be document
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param title string Title for the result
 * @param caption string Optional. Caption of the document to be sent, 0-200 characters
 * @param document_url string A valid URL for the file
 * @param mime_type string Mime type of the content of the file, either “application/pdf” or “application/zip”
 * @param description string Optional. Short description of the result
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the file
 * @param thumb_url string Optional. URL of the thumbnail (jpeg only) for the file
 * @param thumb_width integer Optional. Thumbnail width
 * @param thumb_height integer Optional. Thumbnail height
 */

class InlineQueryResultDocument extends telegramObject{

    protected $name='InlineQueryResultDocument';

    protected $requireds=['type'=>'string','id'=>'string','title'=>'string','document_url'=>'string','mime_type'=>'string'];

    protected $optionals=['caption'=>'string','description'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent','thumb_url'=>'string','thumb_width'=>'integer','thumb_height'=>'integer'];

}
