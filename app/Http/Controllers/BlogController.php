<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{	
   public function BlogDetails($id){
   	$blog = Blog::where('id',$id)->first();
   	$title = $blog->firstInnerTitle;
   	return view('frontend.blog.blog_details')->with(compact('blog','title'));
   }
}
