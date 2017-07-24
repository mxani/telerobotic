<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getWebhookInfo
 * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
 * @return WebhookInfo
 */


class getWebhookInfo extends telegramMethod{

    protected $name='getWebhookInfo';

    protected $requireds=[];

    protected $optionals=[];

    protected $returns=['WebhookInfo'];

}
