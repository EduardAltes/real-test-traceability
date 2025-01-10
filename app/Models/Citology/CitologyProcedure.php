<?php

namespace App\Models\Citology;

use Illuminate\Database\Eloquent\Model;

class CitologyProcedure extends Model
{
    protected $table = 'citology_procedures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
}
