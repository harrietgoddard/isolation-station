<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["first_name", "last_name", "comment"];
    
    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
    
    //one-to-many relationship
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    //set up formatDate method
}
