<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineKeyboardMarkup
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will display unsupported message.
 * @param inline_keyboard Array of Array of InlineKeyboardButton Array of button rows, each represented by an Array of InlineKeyboardButton objects
 */

class InlineKeyboardMarkup extends telegramObject{

    protected $name='InlineKeyboardMarkup';

    protected $requireds=['inline_keyboard'=>'Array of Array of InlineKeyboardButton'];

    protected $optionals=[];

}
