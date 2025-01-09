<?php

namespace App\Models\Citology;

use Illuminate\Database\Eloquent\Model;

class CitologyLab extends Model
{
    protected $table = 'citology_labs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
}
