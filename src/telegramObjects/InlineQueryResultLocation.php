<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultLocation
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be location
 * @param id string Unique identifier for this result, 1-64 Bytes
 * @param latitude double Location latitude in degrees
 * @param longitude double Location longitude in degrees
 * @param title string Location title
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the location
 * @param thumb_url string Optional. Url of the thumbnail for the result
 * @param thumb_width integer Optional. Thumbnail width
 * @param thumb_height integer Optional. Thumbnail height
 */

class InlineQueryResultLocation extends telegramObject{

    protected $name='InlineQueryResultLocation';

    protected $requireds=['type'=>'string','id'=>'string','latitude'=>'double','longitude'=>'double','title'=>'string'];

    protected $optionals=['reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent','thumb_url'=>'string','thumb_width'=>'integer','thumb_height'=>'integer'];

}
