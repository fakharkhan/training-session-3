<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['users'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
