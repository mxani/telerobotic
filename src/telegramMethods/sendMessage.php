<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendMessage
 * Use this method to send text messages. On success, the sent Message is returned.
 * @param chat_id Integer or String Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param text string Text of the message to be sent
 * @param parse_mode string <b>Optional</b> Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
 * @param disable_web_page_preview boolean <b>Optional</b> Disables link previews for links in this message
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply <b>Optional</b> Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */


class sendMessage extends telegramMethod{

    protected $name='sendMessage';

    protected $requireds=['chat_id'=>'Integer or String','text'=>'string'];

    protected $optionals=['parse_mode'=>'string','disable_web_page_preview'=>'boolean','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply'];

}
