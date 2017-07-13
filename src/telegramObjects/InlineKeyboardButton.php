<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineKeyboardButton
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 * @param text string Label text on the button
 * @param url string Optional. HTTP url to be opened when button is pressed
 * @param callback_data string Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
 * @param switch_inline_query string Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just the bot’s username will be inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
 * @param switch_inline_query_current_chat string Optional. If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot’s username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
 * @param callback_game CallbackGame Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
 * @param pay boolean Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first row.
 */

class InlineKeyboardButton extends telegramObject{

    protected $name='InlineKeyboardButton';

    protected $requireds=['text'=>'string'];

    protected $optionals=['url'=>'string','callback_data'=>'string','switch_inline_query'=>'string','switch_inline_query_current_chat'=>'string','callback_game'=>'CallbackGame','pay'=>'boolean'];

}
