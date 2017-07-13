<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Chat
 * This object represents a chat.
 * @param id integer Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @param type string Type of chat, can be either “private”, “group”, “supergroup” or “channel”
 * @param title string Optional. Title, for supergroups, channels and group chats
 * @param username string Optional. Username, for private chats, supergroups and channels if available
 * @param first_name string Optional. First name of the other party in a private chat
 * @param last_name string Optional. Last name of the other party in a private chat
 * @param all_members_are_administrators boolean Optional. True if a group has ‘All Members Are Admins’ enabled.
 * @param photo ChatPhoto Optional. Chat photo. Returned only in getChat.
 * @param description string Optional. Description, for supergroups and channel chats. Returned only in getChat.
 * @param invite_link string Optional. Chat invite link, for supergroups and channel chats. Returned only in getChat.
 */

class Chat extends telegramObject{

    protected $name='Chat';

    protected $requireds=['id'=>'integer','type'=>'string'];

    protected $optionals=['title'=>'string','username'=>'string','first_name'=>'string','last_name'=>'string','all_members_are_administrators'=>'boolean','photo'=>'ChatPhoto','description'=>'string','invite_link'=>'string'];

}
