<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Game
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 * @param title string Title of the game
 * @param description string Description of the game
 * @param photo Array of PhotoSize Photo that will be displayed in the game message in chats.
 * @param text string Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
 * @param text_entities Array of MessageEntity Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
 * @param animation Animation Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
 */

class Game extends telegramObject{

    protected $name='Game';

    protected $requireds=['title'=>'string','description'=>'string','photo'=>'Array of PhotoSize'];

    protected $optionals=['text'=>'string','text_entities'=>'Array of MessageEntity','animation'=>'Animation'];

}
