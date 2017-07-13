<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InputVenueMessageContent
 * Represents the content of a venue message to be sent as the result of an inline query. 
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @param latitude double Latitude of the venue in degrees
 * @param longitude double Longitude of the venue in degrees
 * @param title string Name of the venue
 * @param address string Address of the venue
 * @param foursquare_id string Optional. Foursquare identifier of the venue, if known
 */

class InputVenueMessageContent extends telegramObject{

    protected $name='InputVenueMessageContent';

    protected $requireds=['latitude'=>'double','longitude'=>'double','title'=>'string','address'=>'string'];

    protected $optionals=['foursquare_id'=>'string'];

}
