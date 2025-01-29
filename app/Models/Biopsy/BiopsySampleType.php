<?php

namespace App\Models\Biopsy;

use Illuminate\Database\Eloquent\Model;

class BiopsySampleType extends Model
{
    protected $table = 'biopsy_sample_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',

        //Foreign keys
        'biopsy_sample_type_group_id'
    ];
}
