<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bimage extends Model
{
    //
    protected $fillable=[
        'image',
        'building_id'
    ];
    public function building(){
        return $this->hasMany('APP\Building');
    }
}
