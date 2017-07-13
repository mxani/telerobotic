<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InputLocationMessageContent
 * Represents the content of a location message to be sent as the result of an inline query. 
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param latitude double Latitude of the location in degrees
 * @param longitude double Longitude of the location in degrees
 */

class InputLocationMessageContent extends telegramObject{

    protected $name='InputLocationMessageContent';

    protected $requireds=['latitude'=>'double','longitude'=>'double'];

    protected $optionals=[];

}
