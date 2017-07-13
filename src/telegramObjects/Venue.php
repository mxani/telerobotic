<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Venue
 * This object represents a venue.
 * @param location Location Venue location
 * @param title string Name of the venue
 * @param address string Address of the venue
 * @param foursquare_id string Optional. Foursquare identifier of the venue
 */

class Venue extends telegramObject{

    protected $name='Venue';

    protected $requireds=['location'=>'Location','title'=>'string','address'=>'string'];

    protected $optionals=['foursquare_id'=>'string'];

}
