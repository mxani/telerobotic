<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * PreCheckoutQuery
 * This object contains information about an incoming pre-checkout query.
 * @param id string Unique query identifier
 * @param from User User who sent the query
 * @param currency string Three-letter ISO 4217 currency code
 * @param total_amount integer Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @param invoice_payload string Bot specified invoice payload
 * @param shipping_option_id string Optional. Identifier of the shipping option chosen by the user
 * @param order_info OrderInfo Optional. Order info provided by the user
 */

class PreCheckoutQuery extends telegramObject{

    protected $name='PreCheckoutQuery';

    protected $requireds=['id'=>'string','from'=>'User','currency'=>'string','total_amount'=>'integer','invoice_payload'=>'string'];

    protected $optionals=['shipping_option_id'=>'string','order_info'=>'OrderInfo'];

}
