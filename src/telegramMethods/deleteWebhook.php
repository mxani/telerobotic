<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * deleteWebhook
 * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success. Requires no parameters.
 */


class deleteWebhook extends telegramMethod{

    protected $name='deleteWebhook';

    protected $requireds=[];

    protected $optionals=[];

}
