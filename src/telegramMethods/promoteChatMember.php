<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * promoteChatMember
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Pass False for all boolean parameters to demote a user. Returns True on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param user_id integer Unique identifier of the target user
 * @param can_change_info boolean <b>Optional</b> Pass True, if the administrator can change chat title, photo and other settings
 * @param can_post_messages boolean <b>Optional</b> Pass True, if the administrator can create channel posts, channels only
 * @param can_edit_messages boolean <b>Optional</b> Pass True, if the administrator can edit messages of other users, channels only
 * @param can_delete_messages boolean <b>Optional</b> Pass True, if the administrator can delete messages of other users
 * @param can_invite_users boolean <b>Optional</b> Pass True, if the administrator can invite new users to the chat
 * @param can_restrict_members boolean <b>Optional</b> Pass True, if the administrator can restrict, ban or unban chat members
 * @param can_pin_messages boolean <b>Optional</b> Pass True, if the administrator can pin messages, supergroups only
 * @param can_promote_members boolean <b>Optional</b> Pass True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by him)
 */


class promoteChatMember extends telegramMethod{

    protected $name='promoteChatMember';

    protected $requireds=['chat_id'=>'Integer or String','user_id'=>'integer'];

    protected $optionals=['can_change_info'=>'boolean','can_post_messages'=>'boolean','can_edit_messages'=>'boolean','can_delete_messages'=>'boolean','can_invite_users'=>'boolean','can_restrict_members'=>'boolean','can_pin_messages'=>'boolean','can_promote_members'=>'boolean'];

}
