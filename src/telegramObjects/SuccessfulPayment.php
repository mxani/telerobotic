<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * SuccessfulPayment
 * This object contains basic information about a successful payment.
 * @param currency string Three-letter ISO 4217 currency code
 * @param total_amount integer Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @param invoice_payload string Bot specified invoice payload
 * @param shipping_option_id string Optional. Identifier of the shipping option chosen by the user
 * @param order_info OrderInfo Optional. Order info provided by the user
 * @param telegram_payment_charge_id string Telegram payment identifier
 * @param provider_payment_charge_id string Provider payment identifier
 */

class SuccessfulPayment extends telegramObject{

    protected $name='SuccessfulPayment';

    protected $requireds=['currency'=>'string','total_amount'=>'integer','invoice_payload'=>'string','telegram_payment_charge_id'=>'string','provider_payment_charge_id'=>'string'];

    protected $optionals=['shipping_option_id'=>'string','order_info'=>'OrderInfo'];

}
