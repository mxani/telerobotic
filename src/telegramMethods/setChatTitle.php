<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * setChatTitle
 * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success. 
 * 
Note: In regular groups (non-supergroups), this method will only work if the ‘All Members Are Admins’ setting is off in the target group.

 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param title string New chat title, 1-255 characters
 */


class setChatTitle extends telegramMethod{

    protected $name='setChatTitle';

    protected $requireds=['chat_id'=>'Integer or String','title'=>'string'];

    protected $optionals=[];

}
