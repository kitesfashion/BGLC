<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TimeZone;

class TimeZoneController extends Controller
{
    
    public function index()
    {
        $timeZoneList = TimeZone::orderBy('orderBy','ASC')->get();
        $title = 'Manage Time Zone';
        return view('admin.timeZone.index')->with(compact('timeZoneList','title'));
    }

    public function add(Request $request){
        $title = 'Create Time Zone';
        if(count($request->all()) > 0){
            if (isset($request->image)) {
                $width = '364';
                $height = '275';
                $image = \App\HelperClass::UploadImage($request->image,'time_zone','images/time_zones/',@$width,@$height);
            }
           $timeZone = TimeZone::create( [     
                'name' => $request->name,
                'mobile1' => $request->mobile1,         
                'mobile2' => $request->mobile2,  
                'siteEmail1' => $request->siteEmail1,  
                'siteEmail2' => $request->siteEmail2,  
                'siteAddress1' => $request->siteAddress1,  
                'siteAddress2' => $request->siteAddress2,        
                'image' => @$image,   
                'orderBy' => $request->orderBy,   
                'status' => $request->status,   
            ]); 

           return redirect(route('timeZone.index'))->with('msg','TimeZone Created Successfully');
        }else{
            return view('admin.timeZone.add')->with(compact('title','settings'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Modify Time Zone';
        $timeZone = TimeZone::find($id);
        if(count($request->all()) > 0){
            if($request->image){
                @unlink($timeZone->image);
                $width = '364';
                $height = '275';
                $image = \App\HelperClass::UploadImage($request->image,'time_zone','images/time_zones/',@$width,@$height);
                $timeZone->update( [
                    'image' => @$image,          
            ]);
        }
            $timeZone->update( [
                'name' => $request->name,
                'mobile1' => $request->mobile1,         
                'mobile2' => $request->mobile2,  
                'siteEmail1' => $request->siteEmail1,  
                'siteEmail2' => $request->siteEmail2,  
                'siteAddress1' => $request->siteAddress1,  
                'siteAddress2' => $request->siteAddress2,  
                'orderBy' => $request->orderBy,   
                'status' => $request->status,         
            ]);

            return redirect(route('timeZone.index'))->with('msg','TimeZone Updated Successfully'); 
        }else{
            return view('admin.timeZone.edit')->with(compact('timeZone','title'));
        }
    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = TimeZone::find($request->timeZoneId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->timeZoneId){
            $timeZoneId = $request->timeZoneId; 
        }else{
            $timeZoneId = $id;
        }

        $timeZone = TimeZone::find($timeZoneId);
        @unlink($timeZone->image); 
        TimeZone::where('id',$timeZoneId)->delete();
        return redirect(route('timeZone.index'))->with('msg','TimeZone Deleted Successfully'); 
    }
  
}
