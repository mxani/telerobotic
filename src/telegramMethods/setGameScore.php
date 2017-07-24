<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * setGameScore
 * Use this method to set the score of the specified user in a game. On success, if the message was sent by the bot, returns the edited Message , otherwise returns True . Returns an error, if the new score is not greater than the user's current score in the chat and force is False .
 * @param user_id integer User identifier
 * @param score integer New score, must be non-negative
 * @param force boolean <b>Optional</b> Pass True, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
 * @param disable_edit_message boolean <b>Optional</b> Pass True, if the game message should not be automatically edited to include the current scoreboard
 * @param chat_id integer <b>Optional</b> Required if inline_message_id is not specified. Unique identifier for the target chat
 * @param message_id integer <b>Optional</b> Required if inline_message_id is not specified. Identifier of the sent message
 * @param inline_message_id string <b>Optional</b> Required if chat_id and message_id are not specified. Identifier of the inline message
 * @return Message|boolean|boolean
 */


class setGameScore extends telegramMethod{

    protected $name='setGameScore';

    protected $requireds=['user_id'=>'integer','score'=>'integer'];

    protected $optionals=['force'=>'boolean','disable_edit_message'=>'boolean','chat_id'=>'integer','message_id'=>'integer','inline_message_id'=>'string'];

    protected $returns=['Message','boolean','boolean'];

}
