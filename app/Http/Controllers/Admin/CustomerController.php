<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    
    public function index()
    {
        $partners = Customer::orderBy('orderBy','ASC')->get();
        $title = 'Manage All Client';
        return view('admin.customers.index')->with(compact('partners','title'));
    }

    public function add(Request $request){
        $title = 'Add Client';
        if(count($request->all()) > 0){
            if (isset($request->image)) {
                $image = \App\HelperClass::UploadImage($request->image,'customers','images/customers/');
            }
           $partner = Customer::create( [     
                'name' => $request->name,
                'information' => $request->information,        
                'image' => @$image,        
                'description' => $request->description,                 
                'orderBy' => $request->orderBy,
                'status' => $request->status,      
            ]); 

           return redirect(route('customers.index'))->with('msg','Client Created Successfully');
        }else{
            return view('admin.customers.add')->with(compact('title'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Client';
        $partner = Customer::find($id);
        if(count($request->all()) > 0){
            if($request->image){
                @unlink($partner->image);
                $image = \App\HelperClass::UploadImage($request->image,'customers','images/customers/');
                $partner->update( [
                    'image' => @$image,          
            ]);
        }
            $partner->update( [
                'name' => $request->name,
                'information' => $request->information,               
                'description' => $request->description,                 
                'orderBy' => $request->orderBy,
                'status' => $request->status,         
            ]);

            return redirect(route('customers.index'))->with('msg','ClientClient Updated Successfully'); 
        }else{
            return view('admin.customers.edit')->with(compact('partner','title'));
        }
    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = Customer::find($request->partnerId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->partnerId){
            $partnerId = $request->partnerId; 
        }else{
            $partnerId = $id;
        }

        $partner = Customer::find($partnerId);
        @unlink($partner->image); 
        Customer::where('id',$partnerId)->delete();
        return redirect(route('customers.index'))->with('msg','Client Deleted Successfully'); 
    }
  
}
