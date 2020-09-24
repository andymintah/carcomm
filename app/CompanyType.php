<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    protected $fillable = [
        'name'
    ];


    public function Company(){
        return $this->hasMany('App\Company');
    }  

    /*
    public function projects (){
        return $this->hasMany('App\Project');
    }*/

}
