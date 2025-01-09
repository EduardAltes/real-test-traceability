<?php

namespace App\Models\Citology;

use Illuminate\Database\Eloquent\Model;

class CitologySampleTypeGroup extends Model
{
    protected $table = 'citology_sample_type_groups';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
}
