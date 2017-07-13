<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResultGame
 * Represents a Game.
 * Note: This will only work in Telegram versions released after October 1, 2016. Older clients will not display any inline results if a game result is among them.
 * @param type string Type of the result, must be game
 * @param id string Unique identifier for this result, 1-64 bytes
 * @param game_short_name string Short name of the game
 * @param reply_markup InlineKeyboardMarkup Optional. Inline keyboard attached to the message
 */

class InlineQueryResultGame extends telegramObject{

    protected $name='InlineQueryResultGame';

    protected $requireds=['type'=>'string','id'=>'string','game_short_name'=>'string'];

    protected $optionals=['reply_markup'=>'InlineKeyboardMarkup'];

}
