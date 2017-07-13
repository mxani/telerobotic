<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * deleteMessage
 * Use this method to delete a message, including service messages, with the following limitations:- A message can only be deleted if it was sent less than 48 hours ago.- Bots can delete outgoing messages in groups and supergroups.- Bots granted can_post_messages permissions can delete outgoing messages in channels.- If the bot is an administrator of a group, it can delete any message there.- If the bot has can_delete_messages permission in a supergroup or a channel, it can delete any message there.Returns True on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param message_id integer Identifier of the message to delete
 */


class deleteMessage extends telegramMethod{

    protected $name='deleteMessage';

    protected $requireds=['chat_id'=>'Integer or String','message_id'=>'integer'];

    protected $optionals=[];

}
