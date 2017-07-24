<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * restrictChatMember
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate admin rights. Pass True for all boolean parameters to lift restrictions from a user. Returns True on success.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @param user_id integer Unique identifier of the target user
 * @param until_date integer <b>Optional</b> Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
 * @param can_send_messages boolean <b>Optional</b> Pass True, if the user can send text messages, contacts, locations and venues
 * @param can_send_media_messages boolean <b>Optional</b> Pass True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @param can_send_other_messages boolean <b>Optional</b> Pass True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @param can_add_web_page_previews boolean <b>Optional</b> Pass True, if the user may add web page previews to their messages, implies can_send_media_messages
 * @return boolean
 */


class restrictChatMember extends telegramMethod{

    protected $name='restrictChatMember';

    protected $requireds=['chat_id'=>'Integer or String','user_id'=>'integer'];

    protected $optionals=['until_date'=>'integer','can_send_messages'=>'boolean','can_send_media_messages'=>'boolean','can_send_other_messages'=>'boolean','can_add_web_page_previews'=>'boolean'];

    protected $returns=['boolean'];

}
