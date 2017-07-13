<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * ShippingAddress
 * This object represents a shipping address.
 * @param country_code string ISO 3166-1 alpha-2 country code
 * @param state string State, if applicable
 * @param city string City
 * @param street_line1 string First line for the address
 * @param street_line2 string Second line for the address
 * @param post_code string Address post code
 */

class ShippingAddress extends telegramObject{

    protected $name='ShippingAddress';

    protected $requireds=['country_code'=>'string','state'=>'string','city'=>'string','street_line1'=>'string','street_line2'=>'string','post_code'=>'string'];

    protected $optionals=[];

}
