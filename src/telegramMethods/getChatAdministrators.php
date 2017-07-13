<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getChatAdministrators
 * Use this method to get a list of administrators in a chat. On success, returns an Array of ChatMember objects that contains information about all chat administrators except other bots. If the chat is a group or a supergroup and no administrators were appointed, only the creator will be returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 */


class getChatAdministrators extends telegramMethod{

    protected $name='getChatAdministrators';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=[];

}
