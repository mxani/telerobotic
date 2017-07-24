<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * deleteChatPhoto
 * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success. 
 * 
Note: In regular groups (non-supergroups), this method will only work if the ‘All Members Are Admins’ setting is off in the target group.

 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @return boolean
 */


class deleteChatPhoto extends telegramMethod{

    protected $name='deleteChatPhoto';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=[];

    protected $returns=['boolean'];

}
