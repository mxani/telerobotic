<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * InlineQueryResult
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 * InlineQueryResultCachedAudio
InlineQueryResultCachedDocument
InlineQueryResultCachedGif
InlineQueryResultCachedMpeg4Gif
InlineQueryResultCachedPhoto
InlineQueryResultCachedSticker
InlineQueryResultCachedVideo
InlineQueryResultCachedVoice
InlineQueryResultArticle
InlineQueryResultAudio
InlineQueryResultContact
InlineQueryResultGame
InlineQueryResultDocument
InlineQueryResultGif
InlineQueryResultLocation
InlineQueryResultMpeg4Gif
InlineQueryResultPhoto
InlineQueryResultVenue
InlineQueryResultVideo
InlineQueryResultVoice

 */

class InlineQueryResult extends telegramObject{

    protected $name='InlineQueryResult';

    protected $requireds=[];

    protected $optionals=[];

}
