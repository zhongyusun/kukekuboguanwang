<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Index\HomeController@home')->name('home');
//前台路由组
Route::group(['prefix' => 'index', 'namespace' => 'Index', 'as' => 'index.'], function () {
    //首页
    Route::get('/', 'HomeController@home')->name('home');
    //产品与服务
    Route::get('product_list','HomeController@product_list')->name('product_list');
    //新闻中心
    Route::get('news','HomeController@news')->name('news');
    //新闻详情
    Route::get('new_info/{information}','HomeController@newInfo')->name('new_info');
    //我们的公司
    Route::get('about_us','HomeController@aboutUs')->name('about_us');
    //更赞的用户体验
    Route::get('ue','HomeController@ue')->name('ue');
    //联系我们
    Route::get('contact_us','HomeController@contactUs')->name('contact_us');
    Route::post('store','HomeController@store')->name('store');
    //产品详情
    Route::get('product_info/{product}','HomeController@productInfo')->name('product_info');
    //行业案例列表
    Route::get('case','HomeController@case')->name('case');
    Route::get('case_info/{cases}','HomeController@case_info')->name('case_info');
    //网站地图
    Route::get('map','HomeController@map')->name('map');
    //方案列表
    Route::get('fanganlist','HomeController@fanganlist')->name('fanganlist');
    //方案详情
    Route::get('fanganInfo/{fangan}','HomeController@fangan')->name('fangan_info');
    //友链表单
    Route::get('links','HomeController@links')->name('links');
    Route::post('link_post','HomeController@link_post')->name('link_post');
    //特定方案
    Route::get('design','HomeController@design')->name('design');
    //优势详情
    Route::get('advantage/{advantage}','HomeController@advantage')->name('advantage');
    //优势列表
    Route::get('advantages','HomeController@advantages')->name('advantages');
});

//后台需要验证的路由
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    //后台首页
    Route::get('kukekubo','AdminController@index')->name('kukekubo');
    //退出
    Route::get('logout','SessionsController@logout')->name('logout');
    //产品分类
    Route::resource('classify','ClassifyController');
    //产品详情
    Route::resource('product','ProductController');
    //资讯
    Route::resource('information','InformationController');
//    案例分类
    Route::resource('casecategory','CasecategoryController');
    //案例
    Route::resource('case','CaseController');
    //消息查看
    Route::get('message','AdminController@message')->name('message');
    //友链管理
    Route::resource('link','LinkController');
    //优势
    Route::resource('advantage','AdvantageController');
    //banner
    Route::resource('banner','BannerController');
    //配置项
    Route::resource('config','ConfigController');
    //网站标签
    Route::resource('sign','SignController');
    //方案分类
    Route::resource('fanganlist','FanganlistController');
    //方案详情
    Route::resource('fangan','FanganController');
    //补偿方案
    Route::resource('design','DesignController');
});
//后台不需要验证的路由
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    //登录
    Route::get('login','SessionsController@create')->name('login');
    Route::post('store','SessionsController@store')->name('store');
});

//上传类
Route::group(['prefix' => 'util', 'namespace' => 'Util', 'as' => 'util.'], function () {
    Route::any('/upload', 'UploadController@upload')->name('upload');
});



