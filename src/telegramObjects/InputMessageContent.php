<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InputMessageContent
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 4 types:
 * InputTextMessageContent
InputLocationMessageContent
InputVenueMessageContent
InputContactMessageContent

 */

class InputMessageContent extends telegramObject{

    protected $name='InputMessageContent';

    protected $requireds=[];

    protected $optionals=[];

}
