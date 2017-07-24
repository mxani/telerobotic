<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * unbanChatMember
 * Use this method to unban a previously kicked user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. Returns True on success.
 * @param chat_id Integer or String Unique identifier for the target group or username of the target supergroup or channel (in the format @username)
 * @param user_id integer Unique identifier of the target user
 * @return boolean
 */


class unbanChatMember extends telegramMethod{

    protected $name='unbanChatMember';

    protected $requireds=['chat_id'=>'Integer or String','user_id'=>'integer'];

    protected $optionals=[];

    protected $returns=['boolean'];

}
