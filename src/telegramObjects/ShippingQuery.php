<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * ShippingQuery
 * This object contains information about an incoming shipping query.
 * @param id string Unique query identifier
 * @param from User User who sent the query
 * @param invoice_payload string Bot specified invoice payload
 * @param shipping_address ShippingAddress User specified shipping address
 */

class ShippingQuery extends telegramObject{

    protected $name='ShippingQuery';

    protected $requireds=['id'=>'string','from'=>'User','invoice_payload'=>'string','shipping_address'=>'ShippingAddress'];

    protected $optionals=[];

}
