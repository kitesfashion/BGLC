<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\District;

class DistrictController extends Controller
{     public function index(){
        $districts = District::all();
        $title = 'Manage All District';
        return view('admin.districts.index')->with(compact('districts','title'));
    }

    public function add(Request $request){
        $title = 'Add New District';
        if(count($request->all()) > 0){
           $district = District::create( [     
                'name' => $request->name,                         
                'bn_name' => $request->bn_name,                           
            ]); 

           return redirect(route('district.index'))->with('msg','District Created Successfully');
        }else{
            return view('admin.districts.add')->with(compact('title'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit District';
        $district = District::find($id);
        if(count($request->all()) > 0){
            $district->update( [
                'name' => $request->name,                         
                'bn_name' => $request->bn_name,         
            ]);

            return redirect(route('district.index'))->with('msg','District Updated Successfully'); 
        }else{
            return view('admin.districts.edit')->with(compact('district','title'));
        }
    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->districtId){
            $districtId = $request->districtId; 
        }else{
            $districtId = $id;
        }
        District::where('id',$districtId)->delete();
        return redirect(route('district.index'))->with('msg','Deleted Successfully'); 
    }

}
