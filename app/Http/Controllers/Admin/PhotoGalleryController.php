<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PhotoGallery;
use App\Category;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        $photo_galleries = PhotoGallery::all();
        $title = 'Photo Gallery';
        return view('admin.photo_galleries.index')->with(compact('photo_galleries','title'));
    }

    public function add(Request $request){
        $title = 'Add Photo in Gallery';
        $categories = Category::all();
        if(count($request->all()) > 0){
            if (isset($request->image)) {
                $width = "900";
                $height = "600";
                $image = \App\HelperClass::UploadImage($request->image,'photo_galleries','images/photo_galleries/',@$width,@$height);
            }
           $photoGallery = PhotoGallery::create( [   
                'category_id' => $request->category_id,    
                'title' => $request->title,                    
                'image' => @$image,        
                'description' => $request->description,                                
                'orderBy' => $request->orderBy,
                'status' => $request->status,      
            ]); 

           return redirect(route('photoGallery.index'))->with('msg','Photo Added to Gallery Successfully');
        }else{
            return view('admin.photo_galleries.add')->with(compact('title','categories'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Photo in Gallery';
        $categories = Category::all();
        $photoGallery  = PhotoGallery::find($id);
        if(count($request->all()) > 0){

            if($request->image){
                @unlink($photoGallery ->image);
                $width = "900";
                $height = "600";
                $image = \App\HelperClass::UploadImage($request->image,'photo_galleries','images/photo_galleries/',@$width,@$height);
                $photoGallery ->update( [
                    'image' => @$image,          
                ]);
            }
            $photoGallery ->update( [
                'category_id' => $request->category_id,    
                'title' => $request->title,                      
                'description' => $request->description,                                
                'orderBy' => $request->orderBy,
                'status' => $request->status,           
            ]);

            return redirect(route('photoGallery.index'))->with('msg','Photo Updated in Gallery Successfully'); 
        }else{
            return view('admin.photo_galleries.edit')->with(compact('categories','photoGallery','title'));
        }


    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = PhotoGallery::find($request->photoGalleryId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->photoGalleryId){
            $photoGalleryId = $request->photoGalleryId; 
        }else{
            $photoGalleryId = $id;
        }

        $photoGallery = PhotoGallery::find($photoGalleryId);
        @unlink($photoGallery->image); 
        PhotoGallery::where('id',$photoGalleryId)->delete();
        return redirect(route('photoGallery.index'))->with('msg','Photo Deleted from Gallery Successfully'); 
    }
  
}
