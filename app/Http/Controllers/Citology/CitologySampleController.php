<?php

namespace App\Http\Controllers\Citology;

use App\Http\Controllers\Controller;
use App\Models\Citology\CitologySample;
use App\Models\Citology\CitologySampleType;
use App\Models\Lab;
use Illuminate\Http\Request;

class CitologySampleController extends Controller
{
    public function create(){
        $labs = Lab::all();
        $citologyTypes = CitologySampleType::all();
        return view('citology.sample-reception', compact('labs', 'citologyTypes'));
    }

    public function store(Request $request){
        $dataInput = $request->all();
        $dataInput['reception_verified'] = isset($dataInput['reception_verified']) ? 1 : 0;
        $sample = CitologySample::create($dataInput);

        return redirect()->route('sample-citology.index', 1);
    }
}
