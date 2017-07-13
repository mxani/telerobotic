<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getGameHighScores
 * Use this method to get data for high score tables. Will return the score of the specified user and several of his neighbors in a game. On success, returns an Array of GameHighScore objects.
 * 
This method will currently return scores for the target user, plus two of his closest neighbors on each side. Will also return the top three users if the user and his neighbors are not among them. Please note that this behavior is subject to change.

 * @param user_id integer Target user id
 * @param chat_id integer <b>Optional</b> Required if inline_message_id is not specified. Unique identifier for the target chat
 * @param message_id integer <b>Optional</b> Required if inline_message_id is not specified. Identifier of the sent message
 * @param inline_message_id string <b>Optional</b> Required if chat_id and message_id are not specified. Identifier of the inline message
 */


class getGameHighScores extends telegramMethod{

    protected $name='getGameHighScores';

    protected $requireds=['user_id'=>'integer'];

    protected $optionals=['chat_id'=>'integer','message_id'=>'integer','inline_message_id'=>'string'];

}
