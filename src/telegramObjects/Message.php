<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Message
 * This object represents a message.
 * @param message_id integer Unique message identifier inside this chat
 * @param from User Optional. Sender, can be empty for messages sent to channels
 * @param date integer Date the message was sent in Unix time
 * @param chat Chat Conversation the message belongs to
 * @param forward_from User Optional. For forwarded messages, sender of the original message
 * @param forward_from_chat Chat Optional. For messages forwarded from a channel, information about the original channel
 * @param forward_from_message_id integer Optional. For forwarded channel posts, identifier of the original message in the channel
 * @param forward_date integer Optional. For forwarded messages, date the original message was sent in Unix time
 * @param reply_to_message Message Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @param edit_date integer Optional. Date the message was last edited in Unix time
 * @param text string Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
 * @param entities Array of MessageEntity Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @param audio Audio Optional. Message is an audio file, information about the file
 * @param document Document Optional. Message is a general file, information about the file
 * @param game Game Optional. Message is a game, information about the game. More about games »
 * @param photo Array of PhotoSize Optional. Message is a photo, available sizes of the photo
 * @param sticker Sticker Optional. Message is a sticker, information about the sticker
 * @param video Video Optional. Message is a video, information about the video
 * @param voice Voice Optional. Message is a voice message, information about the file
 * @param video_note VideoNote Optional. Message is a video note, information about the video message
 * @param new_chat_members Array of User Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @param caption string Optional. Caption for the document, photo or video, 0-200 characters
 * @param contact Contact Optional. Message is a shared contact, information about the contact
 * @param location Location Optional. Message is a shared location, information about the location
 * @param venue Venue Optional. Message is a venue, information about the venue
 * @param new_chat_member User Optional. A new member was added to the group, information about them (this member may be the bot itself)
 * @param left_chat_member User Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @param new_chat_title string Optional. A chat title was changed to this value
 * @param new_chat_photo Array of PhotoSize Optional. A chat photo was change to this value
 * @param delete_chat_photo boolean Optional. Service message: the chat photo was deleted
 * @param group_chat_created boolean Optional. Service message: the group has been created
 * @param supergroup_chat_created boolean Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @param channel_chat_created boolean Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @param migrate_to_chat_id integer Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @param migrate_from_chat_id integer Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @param pinned_message Message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
 * @param invoice Invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @param successful_payment SuccessfulPayment Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 */

class Message extends telegramObject{

    protected $name='Message';

    protected $requireds=['message_id'=>'integer','date'=>'integer','chat'=>'Chat'];

    protected $optionals=['from'=>'User','forward_from'=>'User','forward_from_chat'=>'Chat','forward_from_message_id'=>'integer','forward_date'=>'integer','reply_to_message'=>'Message','edit_date'=>'integer','text'=>'string','entities'=>'Array of MessageEntity','audio'=>'Audio','document'=>'Document','game'=>'Game','photo'=>'Array of PhotoSize','sticker'=>'Sticker','video'=>'Video','voice'=>'Voice','video_note'=>'VideoNote','new_chat_members'=>'Array of User','caption'=>'string','contact'=>'Contact','location'=>'Location','venue'=>'Venue','new_chat_member'=>'User','left_chat_member'=>'User','new_chat_title'=>'string','new_chat_photo'=>'Array of PhotoSize','delete_chat_photo'=>'boolean','group_chat_created'=>'boolean','supergroup_chat_created'=>'boolean','channel_chat_created'=>'boolean','migrate_to_chat_id'=>'integer','migrate_from_chat_id'=>'integer','pinned_message'=>'Message','invoice'=>'Invoice','successful_payment'=>'SuccessfulPayment'];

}
