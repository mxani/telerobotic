<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getMe
 * A simple method for testing your bot's auth token. Requires no parameters. Returns basic information about the bot in form of a User object.
 * @return User
 */


class getMe extends telegramMethod{

    protected $name='getMe';

    protected $requireds=[];

    protected $optionals=[];

    protected $returns=['User'];

}
