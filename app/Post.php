<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'category_id', 'body'];
	/**
	 * Dodavanje relacije izmedju Posts i Categories
	 * Ime metode mora da bude isto kao i naziv kolone
	 * Pozivanje relacije u view '$post->category->name'
	 * @return [type] [description]
	 */
    public function category()
    {
    	return $this->belongsTo('App\Category'); //Automatski trazi u Posts kolonu sa naziv category + sufix _id
    	# U koliko je se koristi neki drugi tip naziva, dodati drugi argumenat u metodi
    	# return $this->belongsTo('App\Category', 'foreign_key');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function comments($value='')
    {
        return $this->hasMany('App\Comment');
    }
}
