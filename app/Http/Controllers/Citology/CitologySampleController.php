<?php

namespace App\Http\Controllers\Citology;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitologySampleController extends Controller
{
    public function create(){
        return view('citology.sample-reception-2');
    }
}
