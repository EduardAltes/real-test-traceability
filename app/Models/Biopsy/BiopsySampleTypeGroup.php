<?php

namespace App\Models\Biopsy;

use Illuminate\Database\Eloquent\Model;

class BiopsySampleTypeGroup extends Model
{
    protected $table = 'biopsy_sample_type_groups';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
}
 