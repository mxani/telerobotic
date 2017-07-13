<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * unpinChatMessage
 * Use this method to unpin a message in a supergroup chat. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success. 
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 */


class unpinChatMessage extends telegramMethod{

    protected $name='unpinChatMessage';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=[];

}
