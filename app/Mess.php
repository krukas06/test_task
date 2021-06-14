<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mess extends Model
{
    protected $table = 'messages';
    protected $fillable = ['id', 'full_name', 'email', 'phone', 'message'];

}
