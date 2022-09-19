<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeArtist extends Model
{
    use HasFactory;
    protected $table='liked_artists';
    protected $guarded=[];
    public $timestamps = false;

    public function getArtist()
    {
        return $this->belongsTo(Artist::class,'iArtistsId','iArtistsId');
    }
}
