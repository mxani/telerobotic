<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultArticle
 * Represents a link to an article or web page.
 * @param type string Type of the result, must be article
 * @param id string Unique identifier for this result, 1-64 Bytes
 * @param title string Title of the result
 * @param input_message_content InputMessageContent Content of the message to be sent
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param url string Optional. URL of the result
 * @param hide_url boolean Optional. Pass True, if you don't want the URL to be shown in the message
 * @param description string Optional. Short description of the result
 * @param thumb_url string Optional. Url of the thumbnail for the result
 * @param thumb_width integer Optional. Thumbnail width
 * @param thumb_height integer Optional. Thumbnail height
 */

class InlineQueryResultArticle extends telegramObject{

    protected $name='InlineQueryResultArticle';

    protected $requireds=['type'=>'string','id'=>'string','title'=>'string','input_message_content'=>'InputMessageContent'];

    protected $optionals=['reply_markup'=>'InlineKeyboardMarkup','url'=>'string','hide_url'=>'boolean','description'=>'string','thumb_url'=>'string','thumb_width'=>'integer','thumb_height'=>'integer'];

}
