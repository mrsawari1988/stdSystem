<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address', 'post_code', 'home_phone'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
