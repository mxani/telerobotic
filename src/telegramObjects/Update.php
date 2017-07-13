<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * Update
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 * @param update_id integer The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order.
 * @param message Message Optional. New incoming message of any kind — text, photo, sticker, etc.
 * @param edited_message Message Optional. New version of a message that is known to the bot and was edited
 * @param channel_post Message Optional. New incoming channel post of any kind — text, photo, sticker, etc.
 * @param edited_channel_post Message Optional. New version of a channel post that is known to the bot and was edited
 * @param inline_query InlineQuery Optional. New incoming inline query
 * @param chosen_inline_result ChosenInlineResult Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
 * @param callback_query CallbackQuery Optional. New incoming callback query
 * @param shipping_query ShippingQuery Optional. New incoming shipping query. Only for invoices with flexible price
 * @param pre_checkout_query PreCheckoutQuery Optional. New incoming pre-checkout query. Contains full information about checkout
 */

class Update extends telegramObject{

    protected $name='Update';

    protected $requireds=['update_id'=>'integer'];

    protected $optionals=['message'=>'Message','edited_message'=>'Message','channel_post'=>'Message','edited_channel_post'=>'Message','inline_query'=>'InlineQuery','chosen_inline_result'=>'ChosenInlineResult','callback_query'=>'CallbackQuery','shipping_query'=>'ShippingQuery','pre_checkout_query'=>'PreCheckoutQuery'];

}
