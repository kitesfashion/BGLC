<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactAddress;

class ContactAddressController extends Controller
{
    
    public function index()
    {
        $contactAddressList = ContactAddress::orderBy('orderBy','ASC')->get();
        $title = 'Manage All Contact Address';
        return view('admin.contactAddress.index')->with(compact('contactAddressList','title'));
    }

    public function add(Request $request){
        $title = 'Create New Contact Address';
        if(count($request->all()) > 0){
            if($request->image){
               $width = '50';
                $height = '50';
                $image = \App\HelperClass::UploadImage($request->image,'contact_address','images/contact_address/',@$width,@$height); 
            }
            
           $contactAddress = ContactAddress::create( [     
                'officeLocation' => $request->officeLocation,
                'officeName' => $request->officeName,
                'addressTitle1' => $request->addressTitle1,
                'addressTitle2' => $request->addressTitle2,
                'image' => @$image, 
                'name' => $request->name,
                'designation' => $request->designation, 
                'address1' => $request->address1,  
                'address2' => $request->address2,  
                'email1' => $request->email1,  
                'email2' => $request->email2, 
                'mobile1' => $request->mobile1,         
                'mobile2' => $request->mobile2,        
                'orderBy' => $request->orderBy,   
                'status' => $request->status,   
            ]); 

           return redirect(route('contactAddress.index'))->with('msg','Contact Address Created Successfully');
        }else{
            return view('admin.contactAddress.add')->with(compact('title','settings'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Modify Contact Address';
        $contactAddress = ContactAddress::find($id);
        if(count($request->all()) > 0){
            if($request->image){
                @unlink($contactAddress->image);
                $width = '50';
                $height = '50';
                $image = \App\HelperClass::UploadImage($request->image,'contact_address','images/contact_address/',@$width,@$height);
                $contactAddress->update( [
                    'image' => @$image,          
                ]);
            }
            $contactAddress->update( [
                'officeLocation' => $request->officeLocation,
                'officeName' => $request->officeName,
                'addressTitle1' => $request->addressTitle1,
                'addressTitle2' => $request->addressTitle2,
                'name' => $request->name,
                'designation' => $request->designation, 
                'address1' => $request->address1,  
                'address2' => $request->address2,  
                'email1' => $request->email1,  
                'email2' => $request->email2, 
                'mobile1' => $request->mobile1,         
                'mobile2' => $request->mobile2,        
                'orderBy' => $request->orderBy,   
                'status' => $request->status,           
            ]);

            return redirect(route('contactAddress.index'))->with('msg','ContactAddress Updated Successfully'); 
        }else{
            return view('admin.contactAddress.edit')->with(compact('contactAddress','title'));
        }
    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = ContactAddress::find($request->addressId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->addressId){
            $addressId = $request->addressId; 
        }else{
            $addressId = $id;
        }

        $contactAddress = ContactAddress::find($addressId);
        @unlink($contactAddress->image); 
        ContactAddress::where('id',$addressId)->delete();
        return redirect(route('contactAddress.index'))->with('msg','contactAddress Deleted Successfully'); 
    }
  
}
