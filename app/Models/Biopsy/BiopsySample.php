<?php

namespace App\Models\Biopsy;

use Illuminate\Database\Eloquent\Model;

class BiopsySample extends Model
{
    protected $table = 'biopsy_samples';
    protected $primaryKey = 'id';
    protected $fillable = [
        'qr',
        'gender', 
        'age',
        'request',
        'applicant',
        'reception_verified',

        // Foreign keys
        'lab_id',
        'biopsy_sample_type_id',
    ];
} 
