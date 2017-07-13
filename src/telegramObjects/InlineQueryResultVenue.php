<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultVenue
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be venue
 * @param id string Unique identifier for this result, 1-64 Bytes
 * @param latitude double Latitude of the venue location in degrees
 * @param longitude double Longitude of the venue location in degrees
 * @param title string Title of the venue
 * @param address string Address of the venue
 * @param foursquare_id string Optional. Foursquare identifier of the venue if known
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the venue
 * @param thumb_url string Optional. Url of the thumbnail for the result
 * @param thumb_width integer Optional. Thumbnail width
 * @param thumb_height integer Optional. Thumbnail height
 */

class InlineQueryResultVenue extends telegramObject{

    protected $name='InlineQueryResultVenue';

    protected $requireds=['type'=>'string','id'=>'string','latitude'=>'double','longitude'=>'double','title'=>'string','address'=>'string'];

    protected $optionals=['foursquare_id'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent','thumb_url'=>'string','thumb_width'=>'integer','thumb_height'=>'integer'];

}
