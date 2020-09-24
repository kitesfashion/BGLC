<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Response;

use App\Settings;
use App\HeaderBlock;
use App\Slider;
use App\Banner;
use App\Partner;
use App\StudyDestination;
use App\Article;
use App\Testimonial;


class FrontendController extends Controller
{
    public function index()
    {   
        $webInfo = Settings::first();
        $title = $webInfo->siteTitle;
        $metaTag =[
            'meta_keyword'=>$webInfo->metaKeyword,
            'meta_title' =>$webInfo->metaTitle,
            'meta_description' =>$webInfo->metaDescription
         ];

        $sliders = Slider::orderBy('orderBy','ASC')->where('status','1')->get();

        $banners = Banner::orderBy('orderBy','ASC')->where('bannerStatus','1')->first();

        $partnerBlock = HeaderBlock::where('section','partners')->where('articleStatus',1)->first();
        $partnerList = Partner::orderBy('orderBy','ASC')->where('status','1')->get();

        $destinationList = StudyDestination::where('parent_id',NULL)
                        ->where('status',1)
                        ->orderBy('orderBy',"ASC")
                        ->get();

        $guideline = Article::where('articleStatus',1)->where('id',1)->first();

        $scholarshipBlock = HeaderBlock::where('articleStatus',1)->
                            where('section','scholarship')
                            ->first();

        $testimonialList = Testimonial::orderBy('orderBy','ASC')->where('status',1)->get();
         
        return view('frontend.home.home')->with(compact('title','metaTag','sliders','banners','partnerBlock','partnerList','destinationList','guideline','scholarshipBlock','testimonialList'));
    }

    public function Page404()
    {
      return view('frontend.pages.page404');
    }
}
