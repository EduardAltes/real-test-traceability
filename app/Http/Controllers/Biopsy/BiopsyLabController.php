<?php

namespace App\Http\Controllers\Biopsy;

use App\Http\Controllers\Controller;
use App\Models\Biopsy\BiopsySample;
use App\Models\Biopsy\BiopsySampleProcessment;
use Illuminate\Http\Request;

class BiopsyLabController extends Controller
{
    public function create(BiopsySample $sample){
        return view('biopsy.sample-processment', compact('sample'));
    }


    public function store(Request $request){
        $etapa = 3;

        $sample = BiopsySampleProcessment::create($request->all());

        return view('biopsy.sample-processment', compact('sample', 'etapa'));
    }

    public function index($phase){
        $samples = BiopsySample::where('phase', $phase)->paginate(48);

        return view('biopsy.sample-index', compact('samples'));
    }
}
