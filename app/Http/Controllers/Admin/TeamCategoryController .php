<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeamCategory;

class TeamCategoryController extends Controller
{
    public function index()
    {
        $teamCategories = TeamCategory::all();
        $title = 'Manage Team Category';
        return view('admin.teams-category.index')->with(compact('teamCategories','title'));
    }

    public function add(Request $request){
        $title = 'Add Team Category';
        if(count($request->all()) > 0){
            
           $team = TeamCategory::create( [     
                'name' => $request->name,                              
                'orderBy' => $request->orderBy,
                'status' => $request->status,      
            ]); 

           return redirect(route('teamCategory.index'))->with('msg','Team Category Created Successfully');
        }else{
            return view('admin.teams-category.add')->with(compact('title'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Team Category';
        $teamCategory = TeamCategory::find($id);
        if(count($request->all()) > 0){
            $teamCategory->update( [
                'name' => $request->name,                             
                'orderBy' => $request->orderBy,
                'status' => $request->status,          
            ]);

            return redirect(route('teamCategory.index'))->with('msg','Team Category Updated Successfully'); 
        }else{
            return view('admin.teams-category.edit')->with(compact('teamCategory','title'));
        }
    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = TeamCategory::find($request->teamCategoryId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->teamCategoryId){
            $teamCategoryId = $request->teamCategoryId; 
        }else{
            $teamCategoryId = $id;
        }
        TeamCategory::where('id',$teamCategoryId)->delete();
        return redirect(route('teamCategory.index'))->with('msg','Team Category Successfully'); 
    }
  
}
