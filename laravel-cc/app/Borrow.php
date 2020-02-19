<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'name',
        'volume',
        'begin_borrow',
        'end_borrow',      
    ];
}