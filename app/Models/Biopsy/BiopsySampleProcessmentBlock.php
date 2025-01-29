<?php

namespace App\Models\Biopsy;

use Illuminate\Database\Eloquent\Model;

class BiopsySampleProcessmentBlock extends Model
{
    protected $table = 'biopsy_sample_processment_blocks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'biopsy_sample_processment_id', // Foreing key
        'cuts',
        'cuts_verified',

        'tinction_id', // Foreing key
        'tinction_verified',
        
        'observations',
    ];
}
