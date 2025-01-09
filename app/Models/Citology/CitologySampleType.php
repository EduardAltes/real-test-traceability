<?php

namespace App\Models\Citology;

use Illuminate\Database\Eloquent\Model;

class CitologySampleType extends Model
{
    protected $table = 'citology_sample_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',

        //Foreign keys
        'citology_sample_type_group_id'
    ];
}
