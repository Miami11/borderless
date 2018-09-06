<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'address',
        'mobile',
        'total_amount',
        'transaction_date'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
