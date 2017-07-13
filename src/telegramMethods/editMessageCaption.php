<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * editMessageCaption
 * Use this method to edit captions of messages sent by the bot or via the bot (for inline bots). On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
 * @param chat_id Integer or String <b>Optional</b> Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param message_id integer <b>Optional</b> Required if inline_message_id is not specified. Identifier of the sent message
 * @param inline_message_id string <b>Optional</b> Required if chat_id and message_id are not specified. Identifier of the inline message
 * @param caption string <b>Optional</b> New caption of the message
 * @param reply_markup InlineKeyboardMarkup <b>Optional</b> A JSON-serialized object for an inline keyboard.
 */


class editMessageCaption extends telegramMethod{

    protected $name='editMessageCaption';

    protected $requireds=[];

    protected $optionals=['chat_id'=>'Integer or String','message_id'=>'integer','inline_message_id'=>'string','caption'=>'string','reply_markup'=>'InlineKeyboardMarkup'];

}
