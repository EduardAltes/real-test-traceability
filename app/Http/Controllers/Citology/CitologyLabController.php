<?php

namespace App\Http\Controllers\Citology;

use App\Http\Controllers\Controller;
use App\Models\Citology\CitologySampleProcessment;
use Illuminate\Http\Request;

class CitologyLabController extends Controller
{
    public function create(){
        $etapa = 1;
        return view('citology.sample-processment', compact('etapa'));
    }


    public function store(Request $request){
        $etapa = 2;

        $sample = CitologySampleProcessment::create($request->all());

        return view('citology.sample-processment', compact('sample', 'etapa'));
    }
}
