<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gospel extends Model
{
    protected $fillable = [
    	'name', 'slug', 'date', 'file', 'body'
    ];
}
