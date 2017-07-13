<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InputContactMessageContent
 * Represents the content of a contact message to be sent as the result of an inline query. 
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param phone_number string Contact's phone number
 * @param first_name string Contact's first name
 * @param last_name string Optional. Contact's last name
 */

class InputContactMessageContent extends telegramObject{

    protected $name='InputContactMessageContent';

    protected $requireds=['phone_number'=>'string','first_name'=>'string'];

    protected $optionals=['last_name'=>'string'];

}
