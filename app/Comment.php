<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'comment',
        'post_id',
        'parent_id',
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }
    
}
