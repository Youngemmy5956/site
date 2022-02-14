<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    public function blogpost()
    {
        return $this->belongsTo('App\Blogpost');
    }
    use HasFactory;
}
