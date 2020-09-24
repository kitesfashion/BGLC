<?php

//admin panel start here

Auth::routes();

Route::prefix('admin')->group(function()
{
	Route::middleware('auth:admin')->group(function(){
	Route::group(['middleware'=>'menuPermission'],function(){
		//Dashboard Link url
		Route::get('/', 'HomeController@index')->name('admin.index');

		//Basic setup

		//District Setup
		Route::get('/districts', 'Admin\DistrictController@index')->name('district.index');
		Route::match(['GET', 'POST'], '/district/add', 'Admin\DistrictController@add')->name('district.add');
		Route::match(['GET', 'POST'], '/district/edit/{id}', 'Admin\DistrictController@edit')->name('district.edit');
		Route::match(['GET', 'POST'], '/district/delete/{id}', 'Admin\DistrictController@delete')->name('district.delete');

		//Upzilla Setup
		Route::get('/thana', 'Admin\ThanaController@index')->name('thana.index');
		Route::match(['GET', 'POST'], '/thana/add', 'Admin\ThanaController@add')->name('thana.add');
		Route::match(['GET', 'POST'], '/thana/edit/{id}', 'Admin\ThanaController@edit')->name('thana.edit');
		Route::match(['GET', 'POST'], '/thana/delete/{id}', 'Admin\ThanaController@delete')->name('thana.delete');
		
		//Site Information section
		Route::get('/website-information', 'Admin\SettingsController@information')->name('site.info');
		Route::post('/update-information', 'Admin\SettingsController@updatSettings')->name('settings.update');
		Route::get('/admin-logo', 'Admin\SettingsController@adminLogo')->name('admin.logo');
		Route::post('/adminLogo-update', 'Admin\SettingsController@updatadminLogo')->name('adminLogo.update');

		//Contact Address Section
		Route::get('/contact-address', 'Admin\ContactAddressController@index')->name('contactAddress.index');
		Route::match(['GET', 'POST'], '/contact-address/add', 'Admin\ContactAddressController@add')->name('contactAddress.add');
		Route::match(['GET', 'POST'], '/contact-address/edit/{id}', 'Admin\ContactAddressController@edit')->name('contactAddress.edit');
		Route::get('/contact-address/status/{id}', 'Admin\ContactAddressController@status')->name('contactAddress.status');
		Route::match(['GET', 'POST'], '/contact-address/delete/{id}', 'Admin\ContactAddressController@delete')->name('contactAddress.delete');

		//Header Block of any section
		Route::match(['GET', 'POST'], '/header-block/article/{section}', 'Admin\HeaderBlockController@HeaderBlockInfo')->name('headerArticle.block');


		//Gallery Category Section
		Route::get('/category', 'Admin\CategoryController@index')->name('category.index');
		Route::match(['GET', 'POST'], '/category/add', 'Admin\CategoryController@add')->name('category.add');
		Route::match(['GET', 'POST'], '/category/edit/{id}', 'Admin\CategoryController@edit')->name('category.edit');
		Route::get('/category/status/{id}', 'Admin\CategoryController@status')->name('category.status');
		Route::match(['GET', 'POST'], '/category/delete/{id}', 'Admin\CategoryController@delete')->name('category.delete');

		//Our photo gallery Section
		Route::get('/photo-gallery', 'Admin\PhotoGalleryController@index')->name('photoGallery.index');
		Route::match(['GET', 'POST'], '/photo-gallery/add', 'Admin\PhotoGalleryController@add')->name('photoGallery.add');
		Route::match(['GET', 'POST'], '/photo-gallery/edit/{id}', 'Admin\PhotoGalleryController@edit')->name('photoGallery.edit');
		Route::get('/photo-gallery/status/{id}', 'Admin\PhotoGalleryController@status')->name('photoGallery.status');
		Route::match(['GET', 'POST'], '/photo-gallery/delete/{id}', 'Admin\PhotoGalleryController@delete')->name('photoGallery.delete');

		//Start Blog Section
		Route::get('/blogs', 'Admin\BlogController@index')->name('blogs.index');
		Route::get('/blog-add', 'Admin\BlogController@addblog')->name('blogs.add');

		Route::post('/blog-save', 'Admin\BlogController@saveblog')->name('blogs.save');

		Route::get('/blog-edit/{id}', 'Admin\BlogController@editBlog')->name('blogs.edit');

		Route::post('/blog-update/{id}', 'Admin\BlogController@updateBlog')->name('blogs.update');

		Route::get('/blogs/status/{id}', 'Admin\BlogController@status')->name('blogs.status');
		Route::match(['GET', 'POST'], '/blogs/delete/{id}', 'Admin\BlogController@delete')->name('blogs.delete');

		//End Blog Section

		//Product Section
		Route::get('/products', 'Admin\ProductController@index')->name('products.index');
		Route::match(['GET', 'POST'], '/products/add', 'Admin\ProductController@add')->name('products.add');
		Route::match(['GET', 'POST'], '/products/edit/{id}', 'Admin\ProductController@edit')->name('products.edit');
		Route::get('/products/status/{id}', 'Admin\ProductController@status')->name('products.status');
		Route::match(['GET', 'POST'], '/products/delete/{id}', 'Admin\ProductController@delete')->name('products.delete');

		Route::post('/get-sub-article', 'Admin\CollectionController@getSubArticle')->name('getSubArticle');

		//Service Section
		Route::get('/services', 'Admin\ServiceController@index')->name('services.index');
		Route::match(['GET', 'POST'], '/services/add', 'Admin\ServiceController@add')->name('services.add');
		Route::match(['GET', 'POST'], '/services/edit/{id}', 'Admin\ServiceController@edit')->name('services.edit');
		Route::get('/services/status/{id}', 'Admin\ServiceController@status')->name('services.status');
		Route::match(['GET', 'POST'], '/services/delete/{id}', 'Admin\ServiceController@delete')->name('services.delete');

		//Study Destination Section
		Route::get('/study-destination', 'Admin\StudyDestinationController@index')->name('studyDestination.index');
		Route::match(['GET', 'POST'], '/study-destination/add', 'Admin\StudyDestinationController@add')->name('studyDestination.add');
		Route::match(['GET', 'POST'], '/study-destination/edit/{id}', 'Admin\StudyDestinationController@edit')->name('studyDestination.edit');
		Route::get('/study-destination/status/{id}', 'Admin\StudyDestinationController@status')->name('studyDestination.status');
		Route::match(['GET', 'POST'], '/study-destination/delete/{id}', 'Admin\StudyDestinationController@delete')->name('studyDestination.delete');

		//Scholarship Section
		Route::get('/scholarship', 'Admin\ScholarshipController@index')->name('scholarship.index');
		Route::match(['GET', 'POST'], '/scholarship/add', 'Admin\ScholarshipController@add')->name('scholarship.add');
		Route::match(['GET', 'POST'], '/scholarship/edit/{id}', 'Admin\ScholarshipController@edit')->name('scholarship.edit');
		Route::get('/scholarship/status/{id}', 'Admin\ScholarshipController@status')->name('scholarship.status');
		Route::match(['GET', 'POST'], '/scholarship/delete/{id}', 'Admin\ScholarshipController@delete')->name('scholarship.delete');

		//Portfolio Section
		Route::get('/portfolio', 'Admin\PortfolioController@index')->name('portfolio.index');
		Route::match(['GET', 'POST'], '/portfolio/add', 'Admin\PortfolioController@add')->name('portfolio.add');
		Route::match(['GET', 'POST'], '/portfolio/edit/{id}', 'Admin\PortfolioController@edit')->name('portfolio.edit');
		Route::get('/portfolio/status/{id}', 'Admin\PortfolioController@status')->name('portfolio.status');
		Route::match(['GET', 'POST'], '/portfolio/delete/{id}', 'Admin\PortfolioController@delete')->name('portfolio.delete');

		//Article Section
		Route::get('/articles', 'Admin\ArticleController@index')->name('articles.index');
		Route::match(['GET', 'POST'], '/articles/add', 'Admin\ArticleController@add')->name('articles.add');
		Route::match(['GET', 'POST'], '/articles/edit/{id}', 'Admin\ArticleController@edit')->name('articles.edit');
		Route::get('/articles/status/{id}', 'Admin\ArticleController@status')->name('articles.status');
		Route::match(['GET', 'POST'], '/articles/delete/{id}', 'Admin\ArticleController@delete')->name('articles.delete');

		//Start Menu Section
		Route::get('/menu', 'Admin\MenuController@index')->name('menu.index');
		Route::match(['GET', 'POST'], '/menu/add', 'Admin\MenuController@add')->name('menuadd.page');
		Route::match(['GET', 'POST'],'/menu/edit/{id}', 'Admin\MenuController@edit')->name('menu.edit');
		Route::get('/menu/status/{id}', 'Admin\MenuController@changeStatus')->name('menu.changeStatus');
		Route::get('/menu/delete/{id}', 'Admin\MenuController@delete')->name('menu.delete');
		Route::post('/menu/delete', 'Admin\MenuController@delete')->name('menu.destroy');

		//Sliders Section
		Route::get('/sliders', 'Admin\SliderController@index')->name('sliders.index');
		Route::match(['GET', 'POST'],'slider-add', 'Admin\SliderController@add')->name('slideradd.page');
		Route::match(['GET', 'POST'],'/slider-edit/{id}', 'Admin\SliderController@edit')->name('slider.edit');
		Route::get('/sliders/status/{id}', 'Admin\SliderController@changeStatus')->name('sliders.changeStatus');
		Route::match(['GET', 'POST'],'/slider-delete/{id}', 'Admin\SliderController@deleteSlider')->name('slider.delete');

		// Banner advertize section
		Route::get('/banners', 'Admin\BannersController@index')->name('banners.index');
		Route::get('/banners-add', 'Admin\BannersController@addbanner')->name('banneradd.page');

		Route::post('/banner-save', 'Admin\BannersController@savebanner')->name('banner.save');

		Route::post('/banners/status', 'Admin\BannersController@status')->name('banners.changebannerStatus');

		Route::get('/banner-edit/{id}', 'Admin\BannersController@editBanner')->name('banner.edit');

		Route::post('/banner-upate', 'Admin\BannersController@updateBanner')->name('banner.update');
		Route::post('/banner-delete', 'Admin\BannersController@deleteBanner')->name('banner.delete');

		//Partner Section
		Route::get('/partners', 'Admin\PartnerController@index')->name('partners.index');
		Route::match(['GET', 'POST'], '/partners/add', 'Admin\PartnerController@add')->name('partners.add');
		Route::match(['GET', 'POST'], '/partners/edit/{id}', 'Admin\PartnerController@edit')->name('partners.edit');
		Route::get('/partners/status/{id}', 'Admin\PartnerController@status')->name('partners.status');
		Route::match(['GET', 'POST'], '/partners/delete/{id}', 'Admin\PartnerController@delete')->name('partners.delete');

		//Social Link section
		Route::get('/social-lniks', 'Admin\SocialLinkController@index')->name('social.index');
		Route::match(['GET', 'POST'], '/social-lniks/add', 'Admin\SocialLinkController@add')->name('social.add');
		Route::match(['GET', 'POST'], '/social-lniks/edit/{id}', 'Admin\SocialLinkController@edit')->name('social.edit');
		Route::get('/social-lniks/status/{id}', 'Admin\SocialLinkController@status')->name('social.status');
		Route::match(['GET', 'POST'], '/social-lniks/delete/{id}', 'Admin\SocialLinkController@delete')->name('social.delete');

		//Contact List
		Route::resource('contacts', 'Admin\ContactController');
		Route::get('/contact-details/{id}', 'Admin\ContactController@contactDetails')->name('contact.contactDetails');
		//Customer Section
		Route::get('/customers', 'Admin\CustomerController@index')->name('customers.index');
		Route::match(['GET', 'POST'], '/customers/add', 'Admin\CustomerController@add')->name('customers.add');
		Route::match(['GET', 'POST'], '/customers/edit/{id}', 'Admin\CustomerController@edit')->name('customers.edit');
		Route::get('/customers/status/{id}', 'Admin\CustomerController@status')->name('customers.status');
		Route::match(['GET', 'POST'], '/customers/delete/{id}', 'Admin\CustomerController@delete')->name('customers.delete');

		//Testimonial Section
		Route::get('/testimonial', 'Admin\TestimonialController@index')->name('testimonial.index');
		Route::match(['GET', 'POST'], '/testimonial/add', 'Admin\TestimonialController@add')->name('testimonial.add');
		Route::match(['GET', 'POST'], '/testimonial/edit/{id}', 'Admin\TestimonialController@edit')->name('testimonial.edit');
		Route::get('/testimonial/status/{id}', 'Admin\TestimonialController@status')->name('testimonial.status');
		Route::match(['GET', 'POST'], '/testimonial/delete/{id}', 'Admin\TestimonialController@delete')->name('testimonial.delete');

		//Team Category Section
		Route::get('/team-category', 'Admin\TeamCategoryController@index')->name('teamCategory.index');
		Route::match(['GET', 'POST'], '/team-category/add', 'Admin\TeamCategoryController@add')->name('teamCategory.add');
		Route::match(['GET', 'POST'], '/team-category/edit/{id}', 'Admin\TeamCategoryController@edit')->name('teamCategory.edit');
		Route::get('/team-category/status/{id}', 'Admin\TeamCategoryController@status')->name('teamCategory.status');
		Route::match(['GET', 'POST'], '/team-category/delete/{id}', 'Admin\TeamCategoryController@delete')->name('teamCategory.delete');

		//Our Team Section
		Route::get('/team', 'Admin\TeamController@index')->name('team.index');
		Route::match(['GET', 'POST'], '/team/add', 'Admin\TeamController@add')->name('team.add');
		Route::match(['GET', 'POST'], '/team/edit/{id}', 'Admin\TeamController@edit')->name('team.edit');
		Route::get('/team/status/{id}', 'Admin\TeamController@status')->name('team.status');
		Route::match(['GET', 'POST'], '/team/delete/{id}', 'Admin\TeamController@delete')->name('team.delete');

		//User Menu 
		Route::get('/user-menu', 'Admin\UserMenuController@index')->name('usermenu.index');
		Route::get('/user-menu/add', 'Admin\UserMenuController@add')->name('usermenu.add');
		Route::post('/user-menu/save', 'Admin\UserMenuController@save')->name('usermenu.save');
		Route::get('/user-menu/edit/{id}', 'Admin\UserMenuController@edit')->name('usermenu.edit');
		Route::post('/user-menu/update', 'Admin\UserMenuController@update')->name('usermenu.update');
		Route::get('/user-menu/status', 'Admin\UserMenuController@status')->name('usermenu.status');
		Route::post('/usermenu-delete', 'Admin\UserMenuController@destroy')->name('usermenu-delete');
		//End User Menu

		//User Menu link action
		Route::get('/user-menu-link/{id}', 'Admin\UserMenuController@usermenuLink')->name('usermenuLink.index');
		Route::get('/user-menu-link-add/{menuId}', 'Admin\UserMenuController@usermenuLinkAdd')->name('userMenu.ActionLinkAdd');
		Route::post('/user-menu-link-save/{parentMenuId}', 'Admin\UserMenuController@usermenuLinkSave')->name('userMenu.ActionLinkSave');
		Route::get('/user-menu-link-edit/{menuId}/{id}', 'Admin\UserMenuController@usermenuLinkEdit')->name('userMenu.ActionLinkEdit');
		Route::post('/user-menu-link-update/{parentMenuId}', 'Admin\UserMenuController@usermenuLinkUpdate')->name('userMenu.ActionLinkUpdate');
		Route::get('/user-menu-action/status', 'Admin\UserMenuController@actionStatus')->name('usermenuAction.status');
		Route::post('/user-menu-action/delete', 'Admin\UserMenuController@actionDestroy')->name('usermenuAction.delete');

		//User Manage
		Route::resource('users', 'Admin\AdminController');
		Route::get('/user-add', 'Admin\AdminController@adduser')->name('useradd.page');

		Route::post('/user-save', 'Admin\AdminController@saveuser')->name('user.save');

		Route::get('/user/status/{id}', 'Admin\AdminController@changeuserStatus')->name('user.changeuserStatus');

		Route::get('/user-edit/{id}', 'Admin\AdminController@edituser')->name('user.edit');

		Route::post('/user-upate', 'Admin\AdminController@updateuser')->name('user.update');
		Route::get('/user-password/{id}', 'Admin\AdminController@password')->name('user.password');

		Route::get('/user-delete/{id}', 'Admin\AdminController@delete')->name('user.delete');

		Route::post('/user-changePassword', 'Admin\AdminController@passwordChange')->name('user.changePassword');

		Route::get('/user-account', 'Admin\AdminController@UserAccount')->name('user.account');
		Route::get('/user-account-password/{id}', 'Admin\AdminController@password')->name('userAccount.password');

		//User Roll Manage

		Route::resource('user-roles', 'Admin\UserRoleController');
		Route::get('/user-role-add', 'Admin\UserRoleController@adduserRole')->name('userRoleAdd.page');

		Route::post('/user-role-save', 'Admin\UserRoleController@saveuserRole')->name('userRole.save');

		Route::get('/userRole/status/{id}', 'Admin\UserRoleController@changeuserRoleStatus')->name('userRole.changeuserRoleStatus');

		Route::get('/user-role-edit/{id}', 'Admin\UserRoleController@edituserRole')->name('userRole.edit');

		Route::post('/user-role-upate', 'Admin\UserRoleController@updateuserRole')->name('userRole.update');
		Route::get('/user-role-permission/{id}', 'Admin\UserRoleController@permission')->name('userRole.permission');
		Route::get('/user-role-delete/{id}', 'Admin\UserRoleController@delete')->name('userRole.detele');
		Route::post('/user-role-permission-update', 'Admin\UserRoleController@permissionUpdate')->name('userRole.permissionUpdate');

		//News letter subscribe section here
		Route::resource('subscribers', 'Admin\NewsletterController');

		//Others info that's can be image title
		Route::match(['GET', 'POST'],'/others-info', 'Admin\OtherInformationController@information')->name('others.info');

		//No Permission Page
		Route::get('/no-permission', 'Admin\AdminController@NoPermission')->name('user.noPermission');

		});
	});

	//Admin Login Url
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login');
    Route::post('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');

    // Password Reset Routes...
     Route::get('/password/reset', 'Auth\AdminForgotPasswordController@passwordForget')->name('admin.password.forget');
     Route::post('/password/email', 'Auth\AdminForgotPasswordController@passwordEmail')->name('admin.password.email');
     Route::get('/new-password/{email}', 'Auth\AdminForgotPasswordController@newPassword')->name('admin.password.newPassword');
     Route::post('/password/save', 'Auth\AdminForgotPasswordController@changePasswordSave')->name('admin.password.save');

});

//-----------------------------------------------------------------------------------//
							//Admin part end//

//frontend url start from here
Route::get('/', 'FrontendController@index')->name('home.index');

//Contact Message here
Route::post('/contact-save', 'ContactController@contacts')->name('contact.save');

Route::get('/{menuName}/{id}', 'MenuController@MenuContent')->name('menu.content');

Route::get('/{asdf}', 'FrontendController@Page404')->name('brandCategory.product');