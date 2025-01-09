<?php

namespace App\Models\Citology;

use Illuminate\Database\Eloquent\Model;

class CitologySample extends Model
{
    protected $table = 'citology_samples';
    protected $primaryKey = 'id';
    protected $fillable = [
        'qr',
        'gender',
        'age',
        'request',
        'applicant',
        'reception_verified',

        // Foreign keys
        'citology_lab_id',
        'citology_sample_type_id',
    ];
}
