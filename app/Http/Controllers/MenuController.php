<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use DB;

use App\HeaderBlock;
use App\Menu;
use App\Article;
use App\Service;
use App\StudyDestination;
use App\Category;
use App\Scholarship;
use App\ContactAddress;

class MenuController extends Controller
{
    public function MenuContent($name,$id){ 
    	$menuDetails = Menu::where('id',$id)->first(); 	
    	if($menuDetails->id == 1){
			$title = $menuDetails->menuName;
	    	$aboutContent = Article::where('menuId',$id)->first();
	    	$metaTag =[
	            'meta_keyword'=>$aboutContent->metaKeyword,
	            'meta_title' =>$aboutContent->metaTitle,
	            'meta_description' =>$aboutContent->metaDescription
	         ];
	        return view('frontend.about.index')->with(compact('title','metaTag','menuDetails','aboutContent'));

		}elseif($id == 2 ){
			$title = $menuDetails->menuName;
	    	$serviceBlock = HeaderBlock::where('section','services')->where('articleStatus',1)->first();
	    	$serviceList = Service::where('status',1)->orderBy('orderBy','ASC')->get();
	    	$metaTag =[
	            'meta_keyword'=>@$serviceBlock->metaKeyword,
	            'meta_title' =>@$serviceBlock->metaTitle,
	            'meta_description' =>@$serviceBlock->metaDescription
	         ];
	        return view('frontend.service.index')->with(compact('title','metaTag','menuDetails','serviceBlock','serviceList'));

		}elseif($menuDetails->parent == 3){
	    	$title = $menuDetails->menuName;
	    	$studyDestination = StudyDestination::where('menuId',$id)->first();
	    	$scholarship = Category::where('destinationId',$studyDestination->id)->first();
	    	$academyList = StudyDestination::where('parent_id',$studyDestination->id)->get();
	    	$metaTag =[
	            'meta_keyword'=>$studyDestination->metaKeyword,
	            'meta_title' =>$studyDestination->metaTitle,
	            'meta_description' =>$studyDestination->metaDescription
	         ];
	        return view('frontend.study_destination.index')->with(compact('title','metaTag','menuDetails','studyDestination','scholarship','academyList'));
		}elseif($menuDetails->id == 4){
	    	$title = $menuDetails->menuName;

	    	$scholarshipBlock = HeaderBlock::where('section','scholarship')->where('articleStatus',1)->first();

	    	$scholarshipCategoryList = DB::table('categories')
    							->select('categories.*','scholarship.categoryId')
								->join('scholarship','categories.id','=','scholarship.categoryId')
								->groupBy('scholarship.categoryId')
								->where('categories.status',1)
								->get();
	    	$metaTag =[
	            'meta_keyword'=>$scholarshipBlock->metaKeyword,
	            'meta_title' =>$scholarshipBlock->metaTitle,
	            'meta_description' =>$scholarshipBlock->metaDescription
	         ];
			return view('frontend.scholarship.index')->with(compact('title','metaTag','menuDetails','scholarshipCategoryList','scholarshipBlock'));
			
		}elseif($menuDetails->id == 11){
	    	$title = $menuDetails->menuName;

	    

			$visa =Article::where('id',3)->first();
			
	//dd($visa);
				$metaTag =[
					'meta_keyword'=>@$visa->metaKeyword,
					'meta_title' =>@$visa->metaTitle,
					'meta_description' =>@$visa->metaDescription
				];
	        return view('frontend.visa.visaapply')->with(compact('title','metaTag','menuDetails','visa'));
		}
		elseif($menuDetails->id == 5){
	    	$title = $menuDetails->menuName;

	    	$contactBlock = HeaderBlock::where('section','contacts')->where('articleStatus',1)->first();

	    	$contactAddressList = ContactAddress::where('status',1)->orderBy('orderBy','ASC')->get();

	    	
	    	$metaTag =[
	            'meta_keyword'=>$contactBlock->metaKeyword,
	            'meta_title' =>$contactBlock->metaTitle,
	            'meta_description' =>$contactBlock->metaDescription
	         ];
	        return view('frontend.contact.index')->with(compact('title','metaTag','menuDetails','contactBlock','contactAddressList'));
		}
    }

}