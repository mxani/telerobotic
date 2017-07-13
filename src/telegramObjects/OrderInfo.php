<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * OrderInfo
 * This object represents information about an order.
 * @param name string Optional. User name
 * @param phone_number string Optional. User's phone number
 * @param email string Optional. User email
 * @param shipping_address ShippingAddress Optional. User shipping address
 */

class OrderInfo extends telegramObject{

    protected $name='OrderInfo';

    protected $requireds=[];

    protected $optionals=['name'=>'string','phone_number'=>'string','email'=>'string','shipping_address'=>'ShippingAddress'];

}
