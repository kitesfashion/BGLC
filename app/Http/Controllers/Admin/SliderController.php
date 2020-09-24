<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SliderController extends Controller
{
    public function index()
    {   $title = "Manage All Sliders";
        $sliders = Slider::all();
        return view('admin.sliders.index')->with(compact('title','sliders'));
    }

    public function add(Request $request){
        $title = 'Add Slider';
        if(count($request->all()) > 0){
            $this->validate(request(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'             
            ]);

            if($request->image){
                $width = '2045';
                $height = '600';
                $image = \App\HelperClass::UploadImage($request->image,'sliders','images/slider_image/',@$width,@$height);
            }
            $slider = Slider::create( [     
                    'firstTitle' => $request->firstTitle,
                    'secondTitle' => $request->secondTitle,
                    'description' => $request->description,
                    'image' => @$image,              
                    'link' => @$request->link,              
                    'status' => $request->status, 
                    'metaTitle' => $request->metaTitle,            
                    'metaKeyword' => $request->metaKeyword,            
                    'metaDescription' => $request->metaDescription,            
                    'orderBy' => $request->orderBy,           
                ]);

            return redirect(route('sliders.index'))->with('msg','Slider Added Successfully');
            }else{
                return view('admin.sliders.addslider')->with(compact('title'));
            }
    }


    public function changeStatus(Request $request)
    {
        if($request->ajax())
        {   
            $data = Slider::find($request->slider_id);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

        return redirect(route('sliders.index')) -> with( 'message', 'Wrong move!');
    }

    public function sliderStatus($id){
        $slider = Slider::find($id);
        if ($slider->status == 0) {
            $slider->update( [           
            'status' => '1',       
            ]);
        }else{
            $slider->update( [           
            'status' => '0',       
            ]);
        }

        return redirect(route('sliders.index')); 
    }

    public function edit(Request $request,$id=NULL){
        $title = "Edit Slider";
        $sliders = Slider::find($id);
        if(count($request->all()) > 0){
            if($request->image){
            @unlink($sliders->image);
            $width = '2045';
            $height = '600';
            $image = \App\HelperClass::UploadImage($request->image,'sliders','images/slider_image/',@$width,@$height);
            $sliders->update( [
                'image' => @$image                       
            ]);

        }
            $sliders->update( [
                'firstTitle' => $request->firstTitle,
                'secondTitle' => $request->secondTitle,
                'description' => $request->description,
                'link' => @$request->link,            
                'status' => $request->status, 
                'metaTitle' => $request->metaTitle,            
                'metaKeyword' => $request->metaKeyword,            
                'metaDescription' => $request->metaDescription,            
                'orderBy' => $request->orderBy,        
            ]);

        return redirect(route('sliders.index'))->with('msg','slider Updated Successfully');
        }else{
          return view('admin.sliders.updateslider')->with(compact('sliders','title'));  
        }
        
    }

    public function deleteSlider(Request $request,$id = NULL)
    {   
        if($request->slider_id){
            $sliderId = $request->slider_id; 
        }else{
            $sliderId = $id;
        }
        $sliders = Slider::find($sliderId);
        @unlink($sliders->image);
        Slider::where('id',$sliderId)->delete(); 
        return redirect(route('sliders.index'))->with('msg','Slider Deleted Successfully');
    }

     
}
