<?php

namespace App\Http\Controllers\Citology;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiopsySampleController extends Controller
{
    public function create(){
        return view('citology.sample-reception-2');
    }
}