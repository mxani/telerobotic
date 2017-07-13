<?php
namespace XB\telegramObjects;

use XB\theory\telegramObject;
/**
 * UserProfilePhotos
 * This object represent a user's profile pictures.
 * @param total_count integer Total number of profile pictures the target user has
 * @param photos Array of Array of PhotoSize Requested profile pictures (in up to 4 sizes each)
 */

class UserProfilePhotos extends telegramObject{

    protected $name='UserProfilePhotos';

    protected $requireds=['total_count'=>'integer','photos'=>'Array of Array of PhotoSize'];

    protected $optionals=[];

}
