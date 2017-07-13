<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * exportChatInviteLink
 * Use this method to export an invite link to a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns exported invite link as String on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 */


class exportChatInviteLink extends telegramMethod{

    protected $name='exportChatInviteLink';

    protected $requireds=['chat_id'=>'Integer or String'];

    protected $optionals=[];

}
