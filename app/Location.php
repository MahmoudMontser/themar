<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected  $fillable=[
        'location_name',
    ];

    public function building(){
        return $this->hasMany('APP\Building');
    }
}

