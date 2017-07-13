<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * ShippingOption
 * This object represents one shipping option.
 * @param id string Shipping option identifier
 * @param title string Option title
 * @param prices Array of LabeledPrice List of price portions
 */

class ShippingOption extends telegramObject{

    protected $name='ShippingOption';

    protected $requireds=['id'=>'string','title'=>'string','prices'=>'Array of LabeledPrice'];

    protected $optionals=[];

}
