<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use App\Team;
use App\TeamCategory;

class TeamController extends Controller
{
    public function index()
    {
        $teams = DB::table('teams')
                    ->select('teams.*','team_category.name as categoryName')
                    ->leftjoin('team_category','team_category.id','=','teams.teamCategory')
                    ->orderBy('teams.teamCategory','ASC')
                    ->orderBy('orderBy','ASC')
                    ->get();
        $title = 'Team Members';
        return view('admin.teams.index')->with(compact('teams','title'));
    }

    public function add(Request $request){
        $title = 'Add Team Member';
        $teamCategories = TeamCategory::all();
        if(count($request->all()) > 0){
            if (isset($request->image)) {
                $image = \App\HelperClass::UploadImage($request->image,'teams','images/teams/');
            }
           $team = Team::create( [   
                'teamCategory' => @$request->teamCategory,    
                'name' => @$request->name,              
                'email' => @$request->email,        
                'phone' => @$request->phone,        
                'designation' => $request->designation,        
                'image' => @$image,        
                'description' => @$request->description,                 
                'facebook' => @$request->facebook,                 
                'twiteer' => @$request->twiteer,                 
                'linkedin' => @$request->linkedin,                 
                'instagram' => @$request->instagram,                 
                'skype' => @$request->skype,                 
                'google_plus' => @$request->google_plus,                 
                'orderBy' => @$request->orderBy,
                'status' => @$request->status,      
            ]); 

           return redirect(route('team.index'))->with('msg','Team Member Created Successfully');
        }else{
            return view('admin.teams.add')->with(compact('title','teamCategories'));
        }
        
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Team Member';
        $teamCategories = TeamCategory::all();
        $team = Team::find($id);
        if(count($request->all()) > 0){

            if($request->image){
                @unlink($team->image);
                $image = \App\HelperClass::UploadImage($request->image,'teams','images/teams/');
                $team->update( [
                    'image' => @$image,          
                ]);
            }
            $team->update( [
                'teamCategory' => @$request->teamCategory,    
                'name' => @$request->name,              
                'email' => @$request->email,        
                'phone' => @$request->phone,        
                'designation' => $request->designation,      
                'description' => @$request->description,                 
                'facebook' => @$request->facebook,                 
                'twiteer' => @$request->twiteer,                 
                'linkedin' => @$request->linkedin,                 
                'instagram' => @$request->instagram,                 
                'skype' => @$request->skype,                 
                'google_plus' => @$request->google_plus,                 
                'orderBy' => @$request->orderBy,
                'status' => @$request->status,          
            ]);

            return redirect(route('team.index'))->with('msg','Team Member Updated Successfully'); 
        }else{
            return view('admin.teams.edit')->with(compact('teamCategories','team','title'));
        }
    }


    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = Team::find($request->teamId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->teamId){
            $teamId = $request->teamId; 
        }else{
            $teamId = $id;
        }

        $team = Team::find($teamId);
        @unlink($teamId->image); 
        Team::where('id',$teamId)->delete();
        return redirect(route('team.index'))->with('msg','Team Member Deleted Successfully'); 
    }
  
}
