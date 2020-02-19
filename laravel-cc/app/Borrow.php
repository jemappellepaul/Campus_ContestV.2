<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
	protected $table = "borrows";
    protected $fillable = [
        'name',
        'volume',
        'start_borrow',
        'end_borrow',      
    ];
}