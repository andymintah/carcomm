<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    protected $fillable = [
        'title',
        'body',
        'imageurl',
        'user_id'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    } 
}
