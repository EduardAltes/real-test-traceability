<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tinction extends Model
{
    protected $table = 'tinctions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name' 
    ];
}
