<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{

    protected $fillable = ['project_id', 'image_id'];
    public $timestamps = false;


}
