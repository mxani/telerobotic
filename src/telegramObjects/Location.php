<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Location
 * This object represents a point on the map.
 * @param longitude double Longitude as defined by sender
 * @param latitude double Latitude as defined by sender
 */

class Location extends telegramObject{

    protected $name='Location';

    protected $requireds=['longitude'=>'double','latitude'=>'double'];

    protected $optionals=[];

}
