<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getChatMember
 * Use this method to get information about a member of a chat. Returns a ChatMember object on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 * @param user_id integer Unique identifier of the target user
 */


class getChatMember extends telegramMethod{

    protected $name='getChatMember';

    protected $requireds=['chat_id'=>'Integer or String','user_id'=>'integer'];

    protected $optionals=[];

}
