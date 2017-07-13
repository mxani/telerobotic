<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * editMessageReplyMarkup
 * Use this method to edit only the reply markup of messages sent by the bot or via the bot (for inline bots).  On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
 * @param chat_id Integer or String <b>Optional</b> Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param message_id integer <b>Optional</b> Required if inline_message_id is not specified. Identifier of the sent message
 * @param inline_message_id string <b>Optional</b> Required if chat_id and message_id are not specified. Identifier of the inline message
 * @param reply_markup InlineKeyboardMarkup <b>Optional</b> A JSON-serialized object for an inline keyboard.
 */


class editMessageReplyMarkup extends telegramMethod{

    protected $name='editMessageReplyMarkup';

    protected $requireds=[];

    protected $optionals=['chat_id'=>'Integer or String','message_id'=>'integer','inline_message_id'=>'string','reply_markup'=>'InlineKeyboardMarkup'];

}
