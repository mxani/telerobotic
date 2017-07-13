<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * forwardMessage
 * Use this method to forward messages of any kind. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param from_chat_id Integer or String Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param message_id integer Message identifier in the chat specified in from_chat_id
 */


class forwardMessage extends telegramMethod{

    protected $name='forwardMessage';

    protected $requireds=['chat_id'=>'Integer or String','from_chat_id'=>'Integer or String','message_id'=>'integer'];

    protected $optionals=['disable_notification'=>'boolean'];

}
