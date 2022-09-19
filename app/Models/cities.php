<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    use HasFactory;
    protected $table='cities';
    protected $guarded = [];

    public function getName()
    {
        if(app()->getLocale() == 'en')
        {
            return $this->name_en;
        }
        return $this->name_ar;
    }

}
