<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['name', 'thumbnail_url', 'description', 'techstack', 'category'];
}
