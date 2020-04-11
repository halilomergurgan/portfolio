<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path','name','ref_image_type_id'];

    public function refImageType(){
        return $this->hasOne('App\RefImageType');
    }
}
