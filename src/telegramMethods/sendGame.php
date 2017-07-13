<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendGame
 * Use this method to send a game. On success, the sent Message is returned.
 * @param chat_id integer Unique identifier for the target chat
 * @param game_short_name string Short name of the game, serves as the unique identifier for the game. Set up your games via Botfather.
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup <b>Optional</b> A JSON-serialized object for an inline keyboard. If empty, one ‘Play game_title’ button will be shown. If not empty, the first button must launch the game.
 */


class sendGame extends telegramMethod{

    protected $name='sendGame';

    protected $requireds=['chat_id'=>'integer','game_short_name'=>'string'];

    protected $optionals=['disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup'];

}
