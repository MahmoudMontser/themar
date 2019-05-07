<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable=[

        'name',
        'owner',
        'image_id',
        'user_id',
        'location_id',
        'status',
        'description',

    ];

    public function building_images(){

        return $this->hasMany('App\Bimage');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
    public function location(){

        return $this->belongsTo('App\Location');
    }


}