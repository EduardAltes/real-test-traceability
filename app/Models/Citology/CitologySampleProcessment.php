<?php

namespace App\Models\Citology;

use Illuminate\Database\Eloquent\Model;

class CitologySampleProcessment extends Model
{
    protected $table = 'citology_sample_processments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'citology_sample_id', // Foreing key
        'description',
        'description_verified',

        'citology_procedure_id', // Foreing key
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
