<?php

namespace App\Models\Biopsy;

use Illuminate\Database\Eloquent\Model;

class BiopsySampleProcessment extends Model
{
    protected $table = 'biopsy_sample_processments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'biopsy_sample_id', // Foreing key
        'description',
        'description_verified',

        'biopsy_procedure_id', // Foreing key
        'procedure_verified',

        'tinction_id', // Foreing key
        'tinction_verified',

        'isMounted', 
        'isDelivered',
        'isDiagnosed',
        'isArchived',

        'observations',
    ];
}
