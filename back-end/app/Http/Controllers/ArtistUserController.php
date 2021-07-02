<?php
/**
 * ArtistUser Controller
 *
 * Provides a set of REST APIs that manipulate artists' data
 * @author      David Wan <autoloadone@gmail.com>
 * @version     1.0.0
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistUser;
use App\Models\ArtistImage;

class ArtistUserController extends Controller
{
    public function index()
    {
        return ArtistUser::all();
    }

    public function show($id)
    {
        $artistUserModel = new ArtistUser();
        $res = $artistUserModel->getArtistAndAlbumById($id);
        return $res;
    }

    public function store(Request $request)
    {
        return ArtistUser::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $artistUser = ArtistUser::findOrFail($id);
        $artistUser->update($request->all());
        return $artistUser;
    }


    public function delete(Request $request, $id)
    {
        $artistUser = ArtistUser::findOrFail($id);
        $artistUser->delete();
        return 204;
    }
}