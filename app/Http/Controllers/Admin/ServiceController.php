<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Service;
use App\Menu;
use App\Category;

class ServiceController extends Controller
{
    public function index()
    {
        $title = 'Manage All Services';
        $serviceList = Service::all(); 
        return view('admin.services.index')->with(compact('title','serviceList'));
    }

    public function add(Request $request){
        $title = 'Add Service';
        $categoryList = Category::orderBy('id',"ASC")->get();
        $menus = Menu::orderBy('id',"ASC")->get();
        if(count($request->all()) > 0){
            if (isset($request->firstHomeImage)) {
                $width = '500';
                $height = '500';
                $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'services','images/services/home/',@$width,@$height);
            }

             if (isset($request->firstInnerImage)) {
                $width = '500';
                $height = '500';
                $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'services','images/services/inner_page/',@$width,@$height);
            }

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

            $services = Service::create( [   
                'menuId' => @$menuId,  
                'categoryId' => @$request->categoryId,  
                'name' => @$request->name,
                'firstHomeTitle' => @$request->firstHomeTitle,
                'secondHomeTitle' => @$request->secondHomeTitle,
                'firstInnerTitle' => @$request->firstInnerTitle,
                'secondInnerTitle' => @$request->secondInnerTitle,
                'firstHomeImage' => @$firstHomeImage,
                'firstInnerImage' => @$firstInnerImage,
                'homeDescription' => $request->homeDescription,
                'innerDescription' => $request->innerDescription,
                'urlLink' => $request->urlLink,
                'articleIcon' => $request->articleIcon,
                'metaTitle' => $request->metaTitle,            
                'metaKeyword' => $request->metaKeyword,            
                'metaDescription' => $request->metaDescription,            
                'orderBy' => $request->orderBy, 
                'status' => $request->status,      
            ]);  

       return redirect(route('services.index'))->with('msg','Service Created Successfully');
        }else{
            return view('admin.services.add')->with(compact('title','categoryList','menus'));
        } 
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Service';
        $menus = Menu::orderBy('id',"ASC")->get();
        $categoryList = Category::orderBy('id',"ASC")->get();
        $services = Service::find($id);
        if(count($request->all()) > 0){
            if (isset($request->firstHomeImage)) {
                @unlink($services->firstHomeImage);
                $width = '500';
                $height = '500';
                $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'services','images/services/home/',@$width,@$height);
                $services->update( [
                    'firstHomeImage' => $firstHomeImage, 
                    ]);
            }

            if (isset($request->firstInnerImage)) {
                @unlink($services->firstInnerImage);
                $width = '500';
                $height = '500';
                $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'services','images/services/inner_page/',@$width,@$height);
                $services->update( [
                    'firstInnerImage' => $firstInnerImage,
                    ]);
            }

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

            $services->update( [
                'menuId' => @$menuId,  
                'categoryId' => $request->categoryId,  
                'name' => @$request->name,
                'firstHomeTitle' => @$request->firstHomeTitle,
                'secondHomeTitle' => @$request->secondHomeTitle,
                'firstInnerTitle' => @$request->firstInnerTitle,
                'secondInnerTitle' => @$request->secondInnerTitle,
                'homeDescription' => $request->homeDescription,
                'innerDescription' => $request->innerDescription,
                'urlLink' => $request->urlLink,
                'articleIcon' => $request->articleIcon,
                'metaTitle' => $request->metaTitle,            
                'metaKeyword' => $request->metaKeyword,            
                'metaDescription' => $request->metaDescription,            
                'orderBy' => $request->orderBy, 
                'status' => $request->status,          
            ]);

            return redirect(route('services.index'))->with('msg','Service Updated Successfully'); 
        }else{
            return view('admin.services.edit')->with(compact('title','services','categoryList','menus'));
        }
    }

    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = Service::find($request->serviceId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->serviceId){
            $serviceId = $request->serviceId; 
        }else{
            $serviceId = $id;
        }

        $services = Service::find($serviceId);
        @unlink($services->firstHomeImage);
        @unlink($services->firstInnerImage);
        Service::where('id',$serviceId)->delete(); 
        return redirect(route('services.index'))->with('msg','Service Deleted Successfully');
    }
  
}
