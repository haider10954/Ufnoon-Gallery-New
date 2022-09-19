<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\Auth;
use App\Models\LikeArtist;
use DateTime;
use Exception;

class ArtistController extends Controller
{
    public function likeartist(Request $request)
    {
        $user = LikeArtist::where('iUserId', auth()->id())
            ->where('iArtistsId', $request['artistId'])
            ->first();
        if ($user) {
            LikeArtist::where('iUserId', auth()->id())
            ->where('iArtistsId', $request['artistId'])
            ->delete();
            return json_encode([
                'error' => false,
                'msg' => 'Artist Disliked',
            ]);
        } else {
            $cret = LikeArtist::create([
                'iUserId' => auth()->id(),
                'iArtistsId' => $request['artistId'],
                'dtAddedDate'=> new DateTime('today'),
            ]);
            if ($cret) {
                return json_encode([
                    'error' => false,
                    'msg' => 'Artist Liked',
                ]);
            }
        }
    }
    public function dislikedartist(Request $request)
    {
        try
        {
            LikeArtist::where('iLikedArtistsId', $request['artistId'])
        ->delete();
        return json_encode([
            'error' => false,
            'msg' => 'Removed Successfully',
        ]);
        }
        catch(Exception $e)
        {
            return json_encode([
                'error' => true,
                'msg' => $e->getMessage(),
            ]);

        }


    }

}
