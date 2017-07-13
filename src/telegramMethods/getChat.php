<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getChat
 * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 */


class getChat extends telegramMethod{

    protected $name='getChat';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=[];

}
