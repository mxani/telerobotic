<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQuery
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 * @param id string Unique identifier for this query
 * @param from User Sender
 * @param location Location Optional. Sender location, only for bots that request user location
 * @param query string Text of the query (up to 512 characters)
 * @param offset string Offset of the results to be returned, can be controlled by the bot
 */

class InlineQuery extends telegramObject{

    protected $name='InlineQuery';

    protected $requireds=['id'=>'string','from'=>'User','query'=>'string','offset'=>'string'];

    protected $optionals=['location'=>'Location'];

}
