<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
}
