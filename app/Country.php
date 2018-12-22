<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];


    public function users()
    {
        return $this->hasMany(User::class);
    }


    /**
     * Get all of the posts for the country.
     */
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
    
}
