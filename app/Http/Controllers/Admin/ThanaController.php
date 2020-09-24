<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Thana;

class ThanaController extends Controller
{     public function index(){
        $thanas = Thana::all();
        $title = 'Manage All Upzilla';
        return view('admin.thanas.index')->with(compact('thanas','title'));
    }

    public function add(Request $request){
        $title = 'Add New Upzilla';
        if(count($request->all()) > 0){
            
           $Thana = Thana::create( [     
                'name' => $request->name,                         
                'bn_name' => $request->bn_name,                           
            ]); 

           return redirect(route('thana.index'))->with('msg','Thana Created Successfully');
        }else{
            return view('admin.thanas.add')->with(compact('title'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Upzilla';
        $Thana = Thana::find($id);
        if(count($request->all()) > 0){
            $Thana->update( [
                'name' => $request->name,                         
                'bn_name' => $request->bn_name,         
            ]);

            return redirect(route('thana.index'))->with('msg','Thana Updated Successfully'); 
        }else{
            return view('admin.thanas.edit')->with(compact('Thana','title'));
        }
    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->thanaId){
            $thanaId = $request->thanaId; 
        }else{
            $thanaId = $id;
        }
        Thana::where('id',$thanaId)->delete();
        return redirect(route('thana.index'))->with('msg','Deleted Successfully'); 
    }

}
