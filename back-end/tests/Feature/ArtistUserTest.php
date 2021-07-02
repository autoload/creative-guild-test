<?php
/**
 * ArtistUser Test
 *
 * @author      David Wan <autoloadone@gmail.com>
 * @version     1.0.0
 */
namespace Tests\Feature;

use App\Models\ArtistUser;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtistUserTest extends TestCase
{

    /**
     * testGetArtistAndAlbumById
     *
     * @dataProvider additionProviderGetArtistAndAlbumById
     * @param $id
     */
    public function testGetArtistAndAlbumById($id)
    {
        $artistUserModel = new ArtistUser();
        $result = $artistUserModel->getArtistAndAlbumById($id);
        $this->assertArrayHasKey('name', $result, "Array doesn't contains 'name' as key");
    }

    public function additionProviderGetArtistAndAlbumById()
    {
        return [
            'id'  => [1],
        ];
    }
}
