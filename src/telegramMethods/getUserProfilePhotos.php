<?php
namespace XB\telegramMethods;

use XB\theory\telegramMethod;
/**
 * getUserProfilePhotos
 * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 * @param user_id integer Unique identifier of the target user
 * @param offset integer <b>Optional</b> Sequential number of the first photo to be returned. By default, all photos are returned.
 * @param limit integer <b>Optional</b> Limits the number of photos to be retrieved. Values between 1—100 are accepted. Defaults to 100.
 */


class getUserProfilePhotos extends telegramMethod{

    protected $name='getUserProfilePhotos';

    protected $requireds=['user_id'=>'integer'];

    protected $optionals=['offset'=>'integer','limit'=>'integer'];

}
