<?php
/**
 * ArtistUser Model
 *
 * The model for the artist_users table
 * @author      David Wan <autoloadone@gmail.com>
 * @version     1.0.0
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistUser extends Model
{
    protected $table = 'artist_users';

    /**
     * getArtistAndAlbumById
     *
     * Get the artist's personal information and album through the user ID
     * @access public
     * @param int $id
     * @return array
     */
    public function getArtistAndAlbumById($id) {
        $res = [];
        if(!$id) {
            return $res;
        }
        $artistUser = ArtistUser::find($id);
        if(!$artistUser) {
            return $res;
        }
        $res['name'] = $artistUser->name;
        $res['phone'] = $artistUser->phone;
        $res['email'] = $artistUser->email;
        $res['bio'] = $artistUser->bio;
        $res['profile_picture'] = env('APP_URL') . env('IMG_URL') . $artistUser->profile_picture;
        $res['album'] = $this->getAlbumById($id);
        return $res;
    }

    /**
     * getAlbumByID
     *
     * Get the artist's album through the user ID
     * @access public
     * @param int $id
     * @return array
     */
    public function getAlbumByID($id) {
        $res = [];
        if(!$id) {
            return $res;
        }
        $artistImageModel = new ArtistImage();
        $artistImages = $artistImageModel->where('artist_id',$id)->get(['id', 'title', 'description', 'img', 'date', 'featured']);
        if(!$artistImages) {
            return $res;
        }
        foreach($artistImages as $artistImage) {
            $arr['id'] = $artistImage->id;
            $arr['title'] = $artistImage->title;
            $arr['description'] = $artistImage->description;
            $arr['img'] = env('APP_URL') . env('IMG_URL') . $artistImage->img;
            $arr['date'] = $artistImage->date;
            $arr['featured'] = $artistImage->featured;
            array_push($res, $arr);
        }
        return $res;
    }
}
