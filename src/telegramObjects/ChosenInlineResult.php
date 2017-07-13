<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * ChosenInlineResult
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner. 
 * @param result_id string The unique identifier for the result that was chosen
 * @param from User The user that chose the result
 * @param location Location Optional. Sender location, only for bots that require user location
 * @param inline_message_id string Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
 * @param query string The query that was used to obtain the result
 */

class ChosenInlineResult extends telegramObject{

    protected $name='ChosenInlineResult';

    protected $requireds=['result_id'=>'string','from'=>'User','query'=>'string'];

    protected $optionals=['location'=>'Location','inline_message_id'=>'string'];

}
