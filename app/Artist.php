<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name', 'popular'
    ];
    public function albums()
    {
        return $this->hasMany('App\Album');
    }

}
