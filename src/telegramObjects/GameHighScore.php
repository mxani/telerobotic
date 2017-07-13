<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * GameHighScore
 * This object represents one row of the high scores table for a game.
 * @param position integer Position in high score table for the game
 * @param user User User
 * @param score integer Score
 */

class GameHighScore extends telegramObject{

    protected $name='GameHighScore';

    protected $requireds=['position'=>'integer','user'=>'User','score'=>'integer'];

    protected $optionals=[];

}
