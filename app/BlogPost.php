<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public function posts()
    {
        return $this->get('App\BlogPost');
    }
}
