<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * pinChatMessage
 * Use this method to pin a message in a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success. 
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @param message_id integer Identifier of a message to pin
 * @param disable_notification boolean <b>Optional</b> Pass True, if it is not necessary to send a notification to all group members about the new pinned message
 * @return boolean
 */


class pinChatMessage extends telegramMethod{

    protected $name='pinChatMessage';

    protected $requireds=['chat_id'=>'Integer or String','message_id'=>'integer'];

    protected $optionals=['disable_notification'=>'boolean'];

    protected $returns=['boolean'];

}
