<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * User
 * This object represents a Telegram user or bot.
 * @param id integer Unique identifier for this user or bot
 * @param first_name string User‘s or bot’s first name
 * @param last_name string Optional. User‘s or bot’s last name
 * @param username string Optional. User‘s or bot’s username
 * @param language_code string Optional. IETF language tag of the user's language
 */

class User extends telegramObject{

    protected $name='User';

    protected $requireds=['id'=>'integer','first_name'=>'string'];

    protected $optionals=['last_name'=>'string','username'=>'string','language_code'=>'string'];

}
