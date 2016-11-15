<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $table = 'blogs';
    protected $dates = ['published_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'subtitle', 'content', 'category', 'image', 'tags', 'user'
    ];

    // Validation Rules and Validator Function
    public static function validator($input){

        $rules = array(
            'title'     =>'required',
            'content'   =>'required',
            'user'      =>'required'
        );

        return Validator::make($input,$rules);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }
}