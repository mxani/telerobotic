<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Contact
 * This object represents a phone contact.
 * @param phone_number string Contact's phone number
 * @param first_name string Contact's first name
 * @param last_name string Optional. Contact's last name
 * @param user_id integer Optional. Contact's user identifier in Telegram
 */

class Contact extends telegramObject{

    protected $name='Contact';

    protected $requireds=['phone_number'=>'string','first_name'=>'string'];

    protected $optionals=['last_name'=>'string','user_id'=>'integer'];

}
