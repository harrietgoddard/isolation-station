<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ["first_name", "last_name", "gratitude", "achievement", "resolution"];

    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    //one-to-many relationship
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
