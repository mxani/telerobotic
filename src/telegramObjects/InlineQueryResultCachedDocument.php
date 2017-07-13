<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultCachedDocument
 * Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be document
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param title string Title for the result
 * @param document_file_id string A valid file identifier for the file
 * @param description string Optional. Short description of the result
 * @param caption string Optional. Caption of the document to be sent, 0-200 characters
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the file
 */

class InlineQueryResultCachedDocument extends telegramObject{

    protected $name='InlineQueryResultCachedDocument';

    protected $requireds=['type'=>'string','id'=>'string','title'=>'string','document_file_id'=>'string'];

    protected $optionals=['description'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent'];

}
