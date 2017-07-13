<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * editMessageText
 * Use this method to edit text and game messages sent by the bot or via the bot (for inline bots). On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
 * @param chat_id Integer or String <b>Optional</b> Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @param message_id integer <b>Optional</b> Required if inline_message_id is not specified. Identifier of the sent message
 * @param inline_message_id string <b>Optional</b> Required if chat_id and message_id are not specified. Identifier of the inline message
 * @param text string New text of the message
 * @param parse_mode string <b>Optional</b> Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
 * @param disable_web_page_preview boolean <b>Optional</b> Disables link previews for links in this message
 * @param reply_markup InlineKeyboardMarkup <b>Optional</b> A JSON-serialized object for an inline keyboard.
 */


class editMessageText extends telegramMethod{

    protected $name='editMessageText';

    protected $requireds=['text'=>'string'];

    protected $optionals=['chat_id'=>'Integer or String','message_id'=>'integer','inline_message_id'=>'string','parse_mode'=>'string','disable_web_page_preview'=>'boolean','reply_markup'=>'InlineKeyboardMarkup'];

}
