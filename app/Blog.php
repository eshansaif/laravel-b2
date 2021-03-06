<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'details'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
