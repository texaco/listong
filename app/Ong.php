<?php

namespace listong;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    protected $table = 'ong';
    protected $fillable = ['name', 'email', 'phone','latitud','longitud', 'user_id'];
    
}
