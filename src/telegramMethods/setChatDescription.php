<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * setChatDescription
 * Use this method to change the description of a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success. 
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param description string <b>Optional</b> New chat description, 0-255 characters
 * @return boolean
 */


class setChatDescription extends telegramMethod{

    protected $name='setChatDescription';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=['description'=>'string'];

    protected $returns=['boolean'];

}
