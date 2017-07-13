<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Invoice
 * This object contains basic information about an invoice.
 * @param title string Product name
 * @param description string Product description
 * @param start_parameter string Unique bot deep-linking parameter that can be used to generate this invoice
 * @param currency string Three-letter ISO 4217 currency code
 * @param total_amount integer Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 */

class Invoice extends telegramObject{

    protected $name='Invoice';

    protected $requireds=['title'=>'string','description'=>'string','start_parameter'=>'string','currency'=>'string','total_amount'=>'integer'];

    protected $optionals=[];

}
