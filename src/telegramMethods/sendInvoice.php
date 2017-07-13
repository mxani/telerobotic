<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * sendInvoice
 * Use this method to send invoices. On success, the sent Message is returned.
 * @param chat_id integer Unique identifier for the target private chat
 * @param title string Product name, 1-32 characters
 * @param description string Product description, 1-255 characters
 * @param payload string Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
 * @param provider_token string Payments provider token, obtained via Botfather
 * @param start_parameter string Unique deep-linking parameter that can be used to generate this invoice when used as a start parameter
 * @param currency string Three-letter ISO 4217 currency code, see more on currencies
 * @param prices Array of LabeledPrice Price breakdown, a list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
 * @param photo_url string <b>Optional</b> URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
 * @param photo_size integer <b>Optional</b> Photo size
 * @param photo_width integer <b>Optional</b> Photo width
 * @param photo_height integer <b>Optional</b> Photo height
 * @param need_name boolean <b>Optional</b> Pass True, if you require the user's full name to complete the order
 * @param need_phone_number boolean <b>Optional</b> Pass True, if you require the user's phone number to complete the order
 * @param need_email boolean <b>Optional</b> Pass True, if you require the user's email to complete the order
 * @param need_shipping_address boolean <b>Optional</b> Pass True, if you require the user's shipping address to complete the order
 * @param is_flexible boolean <b>Optional</b> Pass True, if the final price depends on the shipping method
 * @param disable_notification boolean <b>Optional</b> Sends the message silently. Users will receive a notification with no sound.
 * @param reply_to_message_id integer <b>Optional</b> If the message is a reply, ID of the original message
 * @param reply_markup InlineKeyboardMarkup <b>Optional</b> A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
 */


class sendInvoice extends telegramMethod{

    protected $name='sendInvoice';

    protected $requireds=['chat_id'=>'integer','title'=>'string','description'=>'string','payload'=>'string','provider_token'=>'string','start_parameter'=>'string','currency'=>'string','prices'=>'Array of LabeledPrice'];

    protected $optionals=['photo_url'=>'string','photo_size'=>'integer','photo_width'=>'integer','photo_height'=>'integer','need_name'=>'boolean','need_phone_number'=>'boolean','need_email'=>'boolean','need_shipping_address'=>'boolean','is_flexible'=>'boolean','disable_notification'=>'boolean','reply_to_message_id'=>'integer','reply_markup'=>'InlineKeyboardMarkup'];

}
