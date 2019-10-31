<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Label;

class LabelController extends Controller
{
    public function index($facility_cd){
    	return response()->json(['labels' => Label::where('facility_cd', $facility_cd)->get()]);

    }

    public function store(Request $request, $facility_cd){
    	$label = new Label();
    	$label->facility_cd = $facility_cd;
    	$label->facility_name = $request->facility_name;
    	$label->blood_type = $request->blood_type;
    	$label->collection_dt = $request->collection_dt;
    	$label->expiration_dt = $request->expiration_dt;
    	$label->component_cd = $request->component_cd;
    	$label->component_name = $request->component_name;
    	$label->volume = $request->volume;
    	$label->NAT = $request->nat;
    	$label->ANTIBODY = $request->antibody;
    	$label->ZIKA = $request->zika;
    	$label->header = $request->header;
    	$label->footer = $request->footer;
    	$label->save();
    	return response()->json(['status' => 'success']);
    }

    public function show($id){
    	return response()->json(['label' => Label::find($id)]);
    }

   	public function update(Request $request,$facility_cd,$id){
   		$label = Label::find($id);
    	$label->facility_cd = $facility_cd;
    	$label->facility_name = $request->facility_name;
    	$label->blood_type = $request->blood_type;
    	$label->collection_dt = $request->collection_dt;
    	$label->expiration_dt = $request->expiration_dt;
    	$label->component_cd = $request->component_cd;
    	$label->component_name = $request->component_name;
    	$label->volume = $request->volume;
    	$label->NAT = $request->nat;
    	$label->ANTIBODY = $request->antibody;
    	$label->ZIKA = $request->zika;
    	$label->header = $request->header;
    	$label->footer = $request->footer;
    	$label->save();   	
    	return response()->json(['status' => 'update success']);		
   	}
   	public function destroy($facility_cd,$id){
   		$label = Label::where('facility_cd',$facility_cd)->where('id',$id)->delete();
    	return response()->json(['status' => 'delete success']);		
   	}
}
