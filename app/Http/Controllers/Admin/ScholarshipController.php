<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use App\Scholarship;
use App\Category;
use App\StudyDestination;

class ScholarshipController extends Controller
{
    public function index()
    {   
        $categoryList = Category::orderBy('id',"ASC")->get();
        $categoryId = @$_GET['category'];
        if($categoryId){
            $scholarshipList = DB::table('scholarship')
                    ->select('scholarship.*','categories.name as categoryName')
                    ->leftjoin('categories','categories.id','=','scholarship.categoryId')
                    ->where('categories.id',$categoryId)
                    ->orderBy('scholarship.categoryId','ASC')
                    ->orderBy('orderBy','ASC')
                    ->get();
        }else{
            $scholarshipList = DB::table('scholarship')
                    ->select('scholarship.*','categories.name as categoryName')
                    ->leftjoin('categories','categories.id','=','scholarship.categoryId')
                    ->orderBy('scholarship.categoryId','ASC')
                    ->orderBy('orderBy','ASC')
                    ->get();
        }
        
        $title = 'Scholarship';
        return view('admin.scholarship.index')->with(compact('categoryList','categoryId','scholarshipList','title'));
    }

    public function add(Request $request){
        $title = 'Create Scholarship';
        $categoryList = Category::orderBy('id',"ASC")->get();
        if(count($request->all()) > 0){
            if (isset($request->image)) {
                $image = \App\HelperClass::UploadImage($request->image,'scholarship','images/scholarship/','300','200');
            }

            if($request->categoryId){
                $existCategoryCheck = Category::where('id',$request->categoryId)->first();
                if(!@$existCategoryCheck){
                    $category = Category::create( [     
                        'name' => $request->categoryId,                              
                        'orderBy' => $request->orderBy,
                        'status' => '1',      
                    ]);

                    $request->categoryId = $category->id;
                }else{
                    $request->categoryId = $request->categoryId;
                }
            }

           $scholarship = Scholarship::create( [   
                'categoryId' => @$request->categoryId,    
                'name' => @$request->name,              
                'destinationId' => @$request->destinationId,            
                'image' => @$image,        
                'description' => @$request->description,                 
                'metaTitle' => @$request->metaTitle,                 
                'metaKeyword' => @$request->metaKeyword,                 
                'metaDescription' => @$request->metaDescription,                              
                'orderBy' => @$request->orderBy,
                'status' => @$request->status,      
            ]); 

           return redirect(route('scholarship.index'))->with('msg','Scholarship Created Successfully');
        }else{
            return view('admin.scholarship.add')->with(compact('title','categoryList'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Scholarship';
        $categoryList = Category::orderBy('id',"ASC")->get();
        $scholarship = Scholarship::find($id);
        if(count($request->all()) > 0){

            if($request->image){
                @unlink($scholarship->image);
                $image = \App\HelperClass::UploadImage($request->image,'scholarship','images/scholarship/','300','200');
                $scholarship->update( [
                    'image' => @$image,          
                ]);
            }

            if($request->categoryId){
                $existCategoryCheck = Category::where('id',$request->categoryId)->first();
                if(!@$existCategoryCheck){
                    $category = Category::create( [     
                        'name' => $request->categoryId,                              
                        'orderBy' => $request->orderBy,
                        'status' => '1',      
                    ]);

                    $request->categoryId = $category->id;
                }else{
                    $request->categoryId = $request->categoryId;
                }
            }
            $scholarship->update( [
                'categoryId' => @$request->categoryId,    
                'name' => @$request->name,              
                'destinationId' => @$request->destinationId,                  
                'description' => @$request->description,                 
                'metaTitle' => @$request->metaTitle,                 
                'metaKeyword' => @$request->metaKeyword,                 
                'metaDescription' => @$request->metaDescription,                              
                'orderBy' => @$request->orderBy,
                'status' => @$request->status,          
            ]);

            return redirect(route('scholarship.index'))->with('msg','Scholarship Updated Successfully'); 
        }else{
            return view('admin.scholarship.edit')->with(compact('categoryList','scholarship','title'));
        }
    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = Scholarship::find($request->scholarshipId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->scholarshipId){
            $scholarshipId = $request->scholarshipId; 
        }else{
            $scholarshipId = $id;
        }

        $scholarship = Scholarship::find($scholarshipId);
        @unlink($scholarship->image); 
        Scholarship::where('id',$scholarshipId)->delete();
        return redirect(route('scholarship.index'))->with('msg','Scholarship Deleted Successfully'); 
    }
  
}
