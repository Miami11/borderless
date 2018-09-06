<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'price', 'name', 'info','release_date','image'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
    public function artists()
    {
        return $this->belongsTo('App\Artist');
    }
}
