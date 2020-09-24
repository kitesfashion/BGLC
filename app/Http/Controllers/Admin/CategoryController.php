<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StudyDestination;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $title = 'Manage Category';
        return view('admin.categories.index')->with(compact('categories','title'));
    }

    public function add(Request $request){
        $title = 'Add Category';
        $studyDestinationList = StudyDestination::where('parent_id',NULL)->orderBy('id',"ASC")->get();
        if(count($request->all()) > 0){
            
           $category = Category::create( [     
                'name' => $request->name,                              
                'destinationId' => $request->destinationId,                              
                'orderBy' => $request->orderBy,
                'status' => $request->status,      
            ]); 

           return redirect(route('category.index'))->with('msg','Category Created Successfully');
        }else{
            return view('admin.categories.add')->with(compact('title','studyDestinationList'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Category';
        $category = Category::find($id);
        $studyDestinationList = StudyDestination::where('parent_id',NULL)->orderBy('id',"ASC")->get();
        if(count($request->all()) > 0){
            $category->update( [
                'name' => $request->name,                             
                'destinationId' => $request->destinationId,                             
                'orderBy' => $request->orderBy,
                'status' => $request->status,          
            ]);

            return redirect(route('category.index'))->with('msg','Category Updated Successfully'); 
        }else{
            return view('admin.categories.edit')->with(compact('category','studyDestinationList','title'));
        }
    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = Category::find($request->categoryId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->categoryId){
            $categoryId = $request->categoryId; 
        }else{
            $categoryId = $id;
        }
        Category::where('id',$categoryId)->delete();
        return redirect(route('category.index'))->with('msg','Category Successfully'); 
    }
  
}
