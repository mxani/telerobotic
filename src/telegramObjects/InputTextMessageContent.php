<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InputTextMessageContent
 * Represents the content of a text message to be sent as the result of an inline query. 
 * @param message_text string Text of the message to be sent, 1-4096 characters
 * @param parse_mode string Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
 * @param disable_web_page_preview boolean Optional. Disables link previews for links in the sent message
 */

class InputTextMessageContent extends telegramObject{

    protected $name='InputTextMessageContent';

    protected $requireds=['message_text'=>'string'];

    protected $optionals=['parse_mode'=>'string','disable_web_page_preview'=>'boolean'];

}
