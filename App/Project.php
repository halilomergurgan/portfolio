<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['title', 'content'];
    /*
    public static function all($columns = array('*')) {
        return parent::with('university')->with('category')->get();
    }
*/
    /**
     * Get the university record associated with the Secret.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'project_tags', 'project_id', 'tag_id');
    }

    /**
     * Get the category record associated with the Secret.
     */
    public function images()
    {
        return $this->belongsToMany('App\Image', 'project_images', 'project_id', 'image_id');
    }

    public function cover_image()
    {
        return $this->images()->where('ref_image_type_id', 2)->first();
    }

    public function slide_images()
    {
        return $this->images()->where('ref_image_type_id', 3)->get();
    }
}
