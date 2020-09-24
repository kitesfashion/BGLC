<?php

namespace App\Providers;
use DB;
use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Settings;
use App\SocialLink;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*',function($siteInfo){
            $information = Settings::where('id',1)->first();
            $siteInfo->with('information',$information);
        });

        View::composer('*',function($socialInfo){
            $socialLink = SocialLink::orderBy('orderBy','ASC')->where('status',1)->get();
            $socialInfo->with('socialLink',$socialLink);
        });

        View::composer('*',function($blankImage){
            $blank = asset('/public/frontend/no-image-icon.png');
            $blankImage->with('noImage',$blank);
        });

    }

}
