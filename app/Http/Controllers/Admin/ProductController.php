<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
use App\Menu;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Manage All Product';
        $productList = Product::all(); 
        return view('admin.products.index')->with(compact('title','productList'));
    }

    public function add(Request $request){
        $title = 'Add Product';
        $categoryList = Category::orderBy('id',"ASC")->get();
        $menus = Menu::orderBy('id',"ASC")->get();
        if(count($request->all()) > 0){
            if (isset($request->firstHomeImage)) {
                $width = '1140';
                $height = '760';
                $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'products','images/products/home/',@$width,@$height);
            }

             if (isset($request->firstInnerImage)) {
                $width = '1140';
                $height = '760';
                $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'products','images/products/inner_page/',@$width,@$height);
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

            $products = Product::create( [   
                'menuId' => @$menuId,  
                'categoryId' => $request->categoryId,  
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

       return redirect(route('products.index'))->with('msg','Product Created Successfully');
        }else{
            return view('admin.products.add')->with(compact('title','categoryList','menus'));
        } 
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Product';
        $menus = Menu::orderBy('id',"ASC")->get();
        $categoryList = Category::orderBy('id',"ASC")->get();
        $products = Product::find($id);
        if(count($request->all()) > 0){
            if (isset($request->firstHomeImage)) {
                @unlink($products->firstHomeImage);
                $width = '1140';
                $height = '760';
                $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'products','images/products/home/',@$width,@$height);
                $products->update( [
                    'firstHomeImage' => $firstHomeImage, 
                    ]);
            }

            if (isset($request->firstInnerImage)) {
                @unlink($products->firstInnerImage);
                $width = '1140';
                $height = '760';
                $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'products','images/products/inner_page/',@$width,@$height);
                $products->update( [
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

            $products->update( [
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

            return redirect(route('products.index'))->with('msg','Product Updated Successfully'); 
        }else{
            return view('admin.products.edit')->with(compact('title','products','categoryList','menus'));
        }
    }

    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = Product::find($request->productId);
            $data->status = $data->status ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->productId){
            $productId = $request->productId; 
        }else{
            $productId = $id;
        }

        $products = Product::find($productId);
        @unlink($products->firstHomeImage);
        @unlink($products->firstInnerImage);
        Product::where('id',$productId)->delete(); 
        return redirect(route('products.index'))->with('msg','Product Deleted Successfully');
    }
  
}
