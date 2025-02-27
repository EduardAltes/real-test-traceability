<?php

namespace App\Http\Controllers\Biopsy;

use App\Http\Controllers\Controller;
use App\Models\Biopsy\BiopsySample;
use App\Models\Biopsy\BiopsySampleType;
use App\Models\Lab;
use Illuminate\Http\Request;

class BiopsySampleController extends Controller
{
    public function create(){
        $labs = Lab::all();
        $biopsyTypes = BiopsySampleType::all();
        return view('biopsy.sample-reception', compact('labs', 'biopsyTypes'));
    }

    public function store(Request $request){
        $dataInput = $request->all();

        $dataInput['reception_verified'] = isset($dataInput['reception_verified']) ? 1 : 0;

        $sample = BiopsySample::create($dataInput);

        return redirect()->route('sample-biopsy.index', 1);
    }
}
