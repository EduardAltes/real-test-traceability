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

        'observations',
    ];
}
