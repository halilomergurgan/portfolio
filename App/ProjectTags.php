<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTags extends Model
{
    protected $fillable = ['project_id', 'tag_id'];
    public $timestamps = false;
}
