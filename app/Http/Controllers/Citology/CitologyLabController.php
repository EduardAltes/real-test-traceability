<?php

namespace App\Http\Controllers\Citology;

use App\Http\Controllers\Controller;
use App\Models\Citology\CitologyProcedure;
use App\Models\Citology\CitologySample;
use App\Models\Citology\CitologySampleProcessment;
use App\Models\Tinction;
use Illuminate\Http\Request;

class CitologyLabController extends Controller
{
    public function edit($id){
        $sample = CitologySample::find($id);
        $procedures = CitologyProcedure::all();
        $tinctions = Tinction::all();

        return view('citology.sample-processment', compact('sample', 'procedures', 'tinctions'));
    }


    public function cambiarStage(Request $request){
        $sample = CitologySampleProcessment::create($request->all());

        $citologySample = CitologySample::where('id', operator: $request->sampleId)->first();

        if($citologySample->phase == 1){
            $citologySample->update(attributes: ['etapa' => 2]);
            return view('citology.sample-processment', compact('sample', 'etapa'));
        }else{
            return redirect()->route('citology.sample-index', 2);
        }

    }

    public function index($phase){
        $samples = CitologySample::where('phase', $phase)->paginate(48);

        return view('citology.sample-index', compact('samples'));
    }
}
