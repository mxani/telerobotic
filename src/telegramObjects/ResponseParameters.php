<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * ResponseParameters
 * Contains information about why a request was unsuccessfull.
 * @param migrate_to_chat_id integer Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @param retry_after integer Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
 */

class ResponseParameters extends telegramObject{

    protected $name='ResponseParameters';

    protected $requireds=[];

    protected $optionals=['migrate_to_chat_id'=>'integer','retry_after'=>'integer'];

}
