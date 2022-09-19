<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\ArtistCategory;
class Artist extends Model
{
    use HasFactory;
    protected $table='artists';
    protected $guarded=[];

    public function getCategory()
    {
        return $this->hasOne(ArtistCategory::class,'iArtistsTypesId','iArtistsId');
    }

    public function getlikes()
    {
        return $this->hasMany(LikeArtist::class,'iArtistsId','iArtistsId')->where('iUserId',auth()->id());
    }


}
