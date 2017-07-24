<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * leaveChat
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 * @return boolean
 */


class leaveChat extends telegramMethod{

    protected $name='leaveChat';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=[];

    protected $returns=['boolean'];

}
