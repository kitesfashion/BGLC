<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\StudyDestination;
use App\Menu;
use App\Category;

class StudyDestinationController extends Controller
{
    public function index()
    {
        $title = 'Study Destination';
        $parentList = StudyDestination::where('parent_id',NULL)->orderBy('id',"ASC")->get();
        $parentParam = @$_GET['parent'];
        if($parentParam){
            $destinationList = StudyDestination::where('parent_id',$parentParam)->orWhere('id',$parentParam)->orderBy('parent_id','ASC')->orderBy('orderBy','ASC')->get(); 
        }else{
            $destinationList = StudyDestination::orderBy('parent_id','ASC')->orderBy('orderBy','ASC')->get();  
        }
        return view('admin.studyDestination.index')->with(compact('title','parentList','parentParam','destinationList'));
    }

    public function add(Request $request){
        $title = 'Create Study Destination';
        $menus = Menu::orderBy('id',"ASC")->get();
        $parentList = StudyDestination::where('parent_id',NULL)->orderBy('id',"ASC")->get();
        if(count($request->all()) > 0){
            $existMenuCheck = Menu::where('parent',$request->parentMenu)->where('menuName',$request->menuName)->first();
            if($request->menuName){
                if(!@$existMenuCheck){
                    $menu = Menu::create( [     
                        'root_menu' => @$rootMenu,
                        'parent' => $request->parentMenu,
                        'menuName' => $request->menuName,
                        'firstHomeTitle' => $request->firstHomeTitle,
                        'homeDescription' => $request->homeDescription,
                        'metaTitle' => $request->metaTitle,            
                        'metaKeyword' => $request->metaKeyword,            
                        'metaDescription' => $request->metaDescription,            
                        'orderBy' => $request->orderBy, 
                        'menuStatus' => '1',       
                        'showInMenu' => 'yes',       
                    ]);

                    $menuId = $menu->id;
                }else{
                    $menuId = $existMenuCheck->id;
                }
            }

            $this->validate(request(), [
                'firstHomeImage' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);

            if (isset($request->firstHomeImage)) {
                $width = '800';
                $height = '600';
                $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'study_destination','images/study_destination/home/',@$width,@$height);
            }

            if (isset($request->firstInnerImage)) {
                $width = '220';
                $height = '215';
                $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'study_destination','images/study_destination/inner_page/',@$width,@$height);
            }

            $studyDestination = StudyDestination::create( [   
                'menuId' => @$menuId,  
                'parent_id' => @$request->parent_id,
                'name' => @$request->name,
                'firstHomeTitle' => $request->firstHomeTitle,
                'secondHomeTitle' => $request->secondHomeTitle,
                'firstHomeImage' => @$firstHomeImage,
                'firstInnerImage' => @$firstInnerImage,
                'homeDescription' => $request->homeDescription,
                'innerDescription' => $request->innerDescription,
                'metaTitle' => $request->metaTitle,            
                'metaKeyword' => $request->metaKeyword,            
                'metaDescription' => $request->metaDescription,            
                'orderBy' => $request->orderBy, 
                'buttonName' => $request->buttonName, 
                'status' => $request->status,      
            ]);  

       return redirect(route('studyDestination.index',['parent'=>$request->parent_id]))->with('msg','StudyDestination Created Successfully');
        }else{
            return view('admin.studyDestination.add')->with(compact('title','parentList','menus'));
        } 
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit StudyDestination';
        $menus = Menu::orderBy('id',"ASC")->get();
        $parentList = StudyDestination::where('parent_id',NULL)->orderBy('id',"ASC")->get();
        $studyDestination = StudyDestination::find($id);
        if(count($request->all()) > 0){
            $existMenuCheck = Menu::where('parent',$request->parentMenu)->where('menuName',$request->menuName)->first();
            if($request->menuName){
                if(!@$existMenuCheck){
                    $menu = Menu::create( [     
                        'root_menu' => @$rootMenu,
                        'parent' => $request->parentMenu,
                        'menuName' => $request->menuName,
                        'firstHomeTitle' => $request->firstHomeTitle,
                        'homeDescription' => $request->homeDescription,
                        'metaTitle' => $request->metaTitle,            
                        'metaKeyword' => $request->metaKeyword,            
                        'metaDescription' => $request->metaDescription,            
                        'orderBy' => $request->orderBy, 
                        'menuStatus' => '1',       
                        'showInMenu' => 'yes',       
                    ]);

                    $menuId = $menu->id;
                }else{
                    $menuId = $existMenuCheck->id;
                }
            }

            if (isset($request->firstHomeImage)) {
                @unlink($studyDestination->firstHomeImage);
                $width = '800';
                $height = '600';
                $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'study_destination','images/study_destination/home/',@$width,@$height);
                $studyDestination->update( [
                    'firstHomeImage' => $firstHomeImage, 
                    ]);
            }

            if (isset($request->firstInnerImage)) {
                @unlink($studyDestination->firstInnerImage);
                $width = '220';
                $height = '215';
                $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'study_destination','images/study_destination/inner_page/',@$width,@$height);
                $studyDestination->update( [
                    'firstInnerImage' => $firstInnerImage,
                    ]);
            }

            $studyDestination->update( [
                'menuId' => @$menuId, 
                'parent_id' => @$request->parent_id, 
                'name' => @$request->name,
                'firstHomeTitle' => $request->firstHomeTitle,
                'secondHomeTitle' => $request->secondHomeTitle,
                'homeDescription' => $request->homeDescription,
                'innerDescription' => $request->innerDescription,
                'metaTitle' => $request->metaTitle,            
                'metaKeyword' => $request->metaKeyword,            
                'metaDescription' => $request->metaDescription,            
                'orderBy' => $request->orderBy, 
                'buttonName' => $request->buttonName,  
                'status' => $request->status,          
            ]);

            return redirect(route('studyDestination.index',['parent'=>$request->parent_id]))->with('msg','StudyDestination Updated Successfully'); 
        }else{
            return view('admin.studyDestination.edit')->with(compact('title','studyDestination','parentList','menus'));
        }
    }

    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = StudyDestination::find($request->destinationId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->destinationId){
            $destinationId = $request->destinationId; 
        }else{
            $destinationId = $id;
        }

        $studyDestination = StudyDestination::find($destinationId);
        @unlink($studyDestination->firstHomeImage);
        @unlink($studyDestination->firstInnerImage);
        StudyDestination::where('id',$destinationId)->delete(); 
        return redirect(route('studyDestination.index'))->with('msg','Study Destination Deleted Successfully');
    }
  
}
