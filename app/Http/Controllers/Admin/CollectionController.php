<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\Menu;

class CollectionController extends Controller
{
    public function index()
    {
        $title = 'Manage All Collection';
        $parentArticleParam = @$_GET['parentArticle'];
        $subArticleParam = @$_GET['subArticle'];
        $parentArticleList = Article::all(); 
        if(@$parentArticleParam != '' && @$subArticleParam != ''){ 
            $subArticleList = Article::where('parentArticle',$parentArticleParam)->get();
            $articles = Article::where('parentArticle',$subArticleParam)->orWhere('id',$subArticleParam)->get(); 
        }elseif(@$parentArticleParam){
            $subArticleList = Article::where('parentArticle',$parentArticleParam)->get();
            $articles = Article::where('parentArticle',$parentArticleParam)->orWhere('id',$parentArticleParam)->get(); 
        }else{
            $subArticleList = Article::all();
            $articles = Article::all(); 
        }
        return view('admin.collection.index')->with(compact('title','parentArticleList','subArticleList','parentArticleParam','subArticleParam','articles'));
    }

    public function add(Request $request){
        $title = 'Add Collection';
       $articleList = Article::orderBy('id',"ASC")->where('id',9)->orWhere('parentArticle',9)->get();
        $subArticleList = Article::all();
        if(count($request->all()) > 0){
        $existArticleCheck =Article::where('parentArticle',$request->parentArticle)->where('articleName',$request->articleName)->first();
        if(@$existArticleCheck) {
            $this->validate(request(), [
                'articleName' => 'required|unique:articles'
            ]);
        }
        $this->validate(request(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if($request->subArticle){
            $request->parentArticle = $request->subArticle;
        }
        if (isset($request->firstHomeImage)) {
            $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'articles','images/articles/home/');
        }

         if (isset($request->firstInnerImage)) {
            $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'articles','images/articles/inner_page/');
        }

       $articles = Article::create( [   
            'parentArticle' => $request->parentArticle,  
            'articleName' => @$request->articleName,
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
            'articleStatus' => $request->articleStatus,      
        ]); 

       return redirect(route('collection.index',['parentArticle'=>$request->parentArticle]))->with('msg','Collection Created Successfully');
        }else{
            return view('admin.collection.add')->with(compact('title','articleList','subArticleList'));
        } 
    }

    public function edit(Request $request, $id=NULL){
        $title = 'Edit Product';
        $articles = Article::find($id);
        $articleList = Article::orderBy('id',"ASC")->where('id',9)->orWhere('parentArticle',9)->get();
        $subArticleExsit = Article::find(@$articles->parentArticle);
        $subArticleList = Article::where('parentArticle',@$articles->parentArticle)->where('id','!=',$id)->orWhere('parentArticle',@$subArticleExsit->parentArticle)->get();

        $menus = Menu::orderBy('id',"ASC")->get();
        if(count($request->all()) > 0){
            if($request->subArticle){
                $request->parentArticle = $request->subArticle;
            }
            if (isset($request->firstHomeImage)) {
                @unlink($articles->firstHomeImage);
                $firstHomeImage = \App\HelperClass::UploadImage($request->firstHomeImage,'articles','images/articles/home/');
                $articles->update( [
                    'firstHomeImage' => $firstHomeImage, 
                    ]);
            }

            if (isset($request->firstInnerImage)) {
                 @unlink($articles->firstInnerImage);
                 $firstInnerImage = \App\HelperClass::UploadImage($request->firstInnerImage,'articles','images/articles/inner_page/');
                $articles->update( [
                    'firstInnerImage' => $firstInnerImage,
                    ]);
            }
            $existMenuCheck = Menu::where('parent',$request->parentMenu)->where('menuName',$request->articleName)->first();
            if(!@$existMenuCheck){
                if($request->parentMenu && $articles->menuId == ''){
                    if($request->parentMenu){
                        $getRootMenu = Menu::where('id',$request->parentMenu)->first();
                    }
                    if(@$getRootMenu->parentMenu !=''){
                        $rootMenu = $getRootMenu->parentMenu;
                    }else{
                        $rootMenu = $request->parentMenu;
                    }
                    $menu = Menu::create( [     
                    'root_menu' => @$rootMenu,
                    'parent' => $request->parentMenu,
                    'menuName' => $request->articleName,
                    'articleName' => $request->articleName,
                    'firstHomeTitle' => $request->firstHomeTitle,
                    'firstHomeImage' => @$firstHomeImage,
                    'homeDescription' => $request->homeDescription,
                    'urlLink' => $request->urlLink,
                    'metaTitle' => $request->metaTitle,            
                    'metaKeyword' => $request->metaKeyword,            
                    'metaDescription' => $request->metaDescription,            
                    'orderBy' => '1', 
                    'menuStatus' => '1',       
                    'showInMenu' => 'yes',       
                    ]);

                    $articles->update( [
                        'menuId' => @$menu->id,
                    ]);
                }
            }else{
                $articles->update( [
                        'menuId' => @$existMenuCheck->id,
                    ]);
            }

            $articles->update( [
                'parentArticle' => $request->parentArticle,
                'articleName' => @$request->articleName,
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
                'articleStatus' => $request->articleStatus,          
            ]);

            return redirect(route('collection.index',['parentArticle'=>$request->parentArticle]))->with('msg','Collection Updated Successfully'); 
        }else{
            return view('admin.collection.edit')->with(compact('articles','articleList','subArticleExsit','subArticleList','menus','title'));
        }
    }

    public function status(Request $request)
    {
        if($request->ajax())
        {   
            $data = Article::find($request->articleId);
            $data->articleStatus = $data->articleStatus ^ 1;
            $data->update();
            print_r(1);       
            return;
        }

    }

    public function delete(Request $request,$id = NULL)
    {   
        if($request->articleId){
            $articleId = $request->articleId; 
        }else{
            $articleId = $id;
        }

        $articles = Article::find($articleId);
        @unlink($articles->firstHomeImage);
        @unlink($articles->firstInnerImage);
        Article::where('id',$articleId)->delete(); 
        return redirect(route('collection.index'))->with('msg','Collection Deleted Successfully');
    }

    public function getSubArticle(Request $request){
        $parentArticle = $request->parentArticle;

        $subArticles = Article::where('parentArticle',$parentArticle)->where('parentArticle','!=',9)->get();

        if($request->ajax())
            {
                return response()->json([
                    'subArticles'=>$subArticles,
                    'countSubArticles'=>count($subArticles),
                ]);
            }
    }
  
}
