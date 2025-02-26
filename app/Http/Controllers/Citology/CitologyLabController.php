<?php

namespace App\Http\Controllers\Citology;

use App\Http\Controllers\Controller;
use App\Models\Citology\CitologySample;
use App\Models\Citology\CitologySampleProcessment;
use Illuminate\Http\Request;

class CitologyLabController extends Controller
{
    public function create(CitologySample $sample){
        return view('citology.sample-processment', compact('sample'));
    }


    public function store(Request $request){
        $etapa = 3;

        $sample = CitologySampleProcessment::create($request->all());

        return view('citology.sample-processment', compact('sample', 'etapa'));
    }

    public function index($phase){
        $samples = CitologySample::where('phase', $phase)->paginate(48);

        return view('citology.sample-index', compact('samples'));
    }
}
