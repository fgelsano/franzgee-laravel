<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['mycontact_numbers','myemail_address','myphysical_address'];
}