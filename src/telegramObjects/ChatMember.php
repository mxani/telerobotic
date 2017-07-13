<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * ChatMember
 * This object contains information about one member of a chat.
 * @param user User Information about the user
 * @param status string The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
 * @param until_date integer Optional. Restictred and kicked only. Date when restrictions will be lifted for this user, unix time
 * @param can_be_edited boolean Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
 * @param can_change_info boolean Optional. Administrators only. True, if the administrator can change the chat title, photo and other settings
 * @param can_post_messages boolean Optional. Administrators only. True, if the administrator can post in the channel, channels only
 * @param can_edit_messages boolean Optional. Administrators only. True, if the administrator can edit messages of other users, channels only
 * @param can_delete_messages boolean Optional. Administrators only. True, if the administrator can delete messages of other users
 * @param can_invite_users boolean Optional. Administrators only. True, if the administrator can invite new users to the chat
 * @param can_restrict_members boolean Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
 * @param can_pin_messages boolean Optional. Administrators only. True, if the administrator can pin messages, supergroups only
 * @param can_promote_members boolean Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @param can_send_messages boolean Optional. Restricted only. True, if the user can send text messages, contacts, locations and venues
 * @param can_send_media_messages boolean Optional. Restricted only. True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @param can_send_other_messages boolean Optional. Restricted only. True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @param can_add_web_page_previews boolean Optional. Restricted only. True, if user may add web page previews to his messages, implies can_send_media_messages
 */

class ChatMember extends telegramObject{

    protected $name='ChatMember';

    protected $requireds=['user'=>'User','status'=>'string'];

    protected $optionals=['until_date'=>'integer','can_be_edited'=>'boolean','can_change_info'=>'boolean','can_post_messages'=>'boolean','can_edit_messages'=>'boolean','can_delete_messages'=>'boolean','can_invite_users'=>'boolean','can_restrict_members'=>'boolean','can_pin_messages'=>'boolean','can_promote_members'=>'boolean','can_send_messages'=>'boolean','can_send_media_messages'=>'boolean','can_send_other_messages'=>'boolean','can_add_web_page_previews'=>'boolean'];

}
