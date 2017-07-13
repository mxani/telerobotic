<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * WebhookInfo
 * Contains information about the current status of a webhook.
 * @param url string Webhook URL, may be empty if webhook is not set up
 * @param has_custom_certificate boolean True, if a custom certificate was provided for webhook certificate checks
 * @param pending_update_count integer Number of updates awaiting delivery
 * @param last_error_date integer Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @param last_error_message string Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @param max_connections integer Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @param allowed_updates Array of string Optional. A list of update types the bot is subscribed to. Defaults to all update types
 */

class WebhookInfo extends telegramObject{

    protected $name='WebhookInfo';

    protected $requireds=['url'=>'string','has_custom_certificate'=>'boolean','pending_update_count'=>'integer'];

    protected $optionals=['last_error_date'=>'integer','last_error_message'=>'string','max_connections'=>'integer','allowed_updates'=>'Array of string'];

}
