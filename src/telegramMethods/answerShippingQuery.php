<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * answerShippingQuery
 * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success, True is returned.
 * @param shipping_query_id string Unique identifier for the query to be answered
 * @param ok boolean Specify True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
 * @param shipping_options Array of ShippingOption <b>Optional</b> Required if ok is True. A JSON-serialized array of available shipping options.
 * @param error_message string <b>Optional</b> Required if ok is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
 */


class answerShippingQuery extends telegramMethod{

    protected $name='answerShippingQuery';

    protected $requireds=['shipping_query_id'=>'string','ok'=>'boolean'];

    protected $optionals=['shipping_options'=>'Array of ShippingOption','error_message'=>'string'];

}
