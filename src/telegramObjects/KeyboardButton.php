<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * KeyboardButton
 * This object represents one button of the reply keyboard. For simple text buttons String can be used instead of this object to specify text of the button. Optional fields are mutually exclusive.
 * Note: request_contact and request_location options will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param text string Text of the button. If none of the optional fields are used, it will be sent to the bot as a message when the button is pressed
 * @param request_contact boolean Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
 * @param request_location boolean Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only
 */

class KeyboardButton extends telegramObject{

    protected $name='KeyboardButton';

    protected $requireds=['text'=>'string'];

    protected $optionals=['request_contact'=>'boolean','request_location'=>'boolean'];

}
