<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultContact
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param type string Type of the result, must be contact
 * @param id string Unique identifier for this result, 1-64 Bytes
 * @param phone_number string Contact's phone number
 * @param first_name string Contact's first name
 * @param last_name string Optional. Contact's last name
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 * @param input_message_content InputMessageContent Optional. Content of the message to be sent instead of the contact
 * @param thumb_url string Optional. Url of the thumbnail for the result
 * @param thumb_width integer Optional. Thumbnail width
 * @param thumb_height integer Optional. Thumbnail height
 */

class InlineQueryResultContact extends telegramObject{

    protected $name='InlineQueryResultContact';

    protected $requireds=['type'=>'string','id'=>'string','phone_number'=>'string','first_name'=>'string'];

    protected $optionals=['last_name'=>'string','reply_markup'=>'InlineKeyboardMarkup','input_message_content'=>'InputMessageContent','thumb_url'=>'string','thumb_width'=>'integer','thumb_height'=>'integer'];

}
