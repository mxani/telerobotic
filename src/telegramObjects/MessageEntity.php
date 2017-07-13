<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * MessageEntity
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc. 
 * @param type string Type of the entity. Can be mention (@username), hashtag, bot_command, url, email, bold (bold text), italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs), text_mention (for users without usernames)
 * @param offset integer Offset in UTF-16 code units to the start of the entity
 * @param length integer Length of the entity in UTF-16 code units
 * @param url string Optional. For “text_link” only, url that will be opened after user taps on the text
 * @param user User Optional. For “text_mention” only, the mentioned user
 */

class MessageEntity extends telegramObject{

    protected $name='MessageEntity';

    protected $requireds=['type'=>'string','offset'=>'integer','length'=>'integer'];

    protected $optionals=['url'=>'string','user'=>'User'];

}
