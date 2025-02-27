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
        $citologySample = CitologySample::find($id);
        $procedures = CitologyProcedure::all();
        $tinctions = Tinction::all();

        return view('citology.sample-processment', compact('citologySample', 'procedures', 'tinctions'));
    }


    public function changeStage(Request $request){
        $dataInput = $request->all();

        $checkboxes = [
            'description_verified',
            'procedure_verified',
            'isMounted',
            'isDelivered',
            'isDiagnosed',
            'isArchived',
        ];
        
        foreach ($checkboxes as $checkbox) {
            $dataInput[$checkbox] = isset($dataInput[$checkbox]) ? 1 : 0;
        }
        
        $sample = CitologySampleProcessment::create($request->all());

        $citologySample = CitologySample::where('id', operator: $request->citology_sample_id)->first();
        
        $procedures = CitologyProcedure::all();
        $tinctions = Tinction::all();
        if($citologySample->phase == 1){

            $citologySample->phase = 2;
            $citologySample->save();
            return view('citology.sample-processment', compact('sample', 'citologySample', 'procedures', 'tinctions'));
        }else{
            return redirect()->route('sample-citology.index', 2);
        }

    }

    public function index($phase){
        $samples = CitologySample::where('phase', $phase)->paginate(48);

        return view('citology.sample-index', compact('samples'));
    }
}
