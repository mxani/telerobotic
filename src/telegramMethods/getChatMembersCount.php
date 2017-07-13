<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getChatMembersCount
 * Use this method to get the number of members in a chat. Returns Int on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 */


class getChatMembersCount extends telegramMethod{

    protected $name='getChatMembersCount';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=[];

}
