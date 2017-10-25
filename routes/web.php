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
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'FrontendController@Home');
Route::get('/about', 'FrontendController@About');
Route::get('/notice', 'FrontendController@Notice');
Route::get('/news-details/{id}', 'FrontendController@noticeDetail');
Route::get('/contact', 'FrontendController@Contact');


Route::get('/category-product/{id}', 'FrontendController@category');



Route::get('/user/add', 'UseradminController@addUser');
Route::post('/user/new', 'UseradminController@saveUserInfo');
Route::get('/user/user-manage', 'UseradminController@manageUser');
Route::get('/user/delete/{id}', 'UseradminController@deleteUserInfo');
Route::get('/user/unpublished/{id}', 'UseradminController@unpublishedUserInfo');
Route::get('/user/published/{id}', 'UseradminController@publishedUserInfo');



Route::get('/slider/add', 'SliderController@addSlider');
Route::post('/slider/new', 'SliderController@saveSliderInfo');
Route::get('/slider/manage-slider', 'SliderController@manageSlider');
Route::get('/slider/edit/{id}', 'SliderController@editSliderInfo');
Route::post('/slider/update', 'SliderController@updateSliderInfo');
Route::get('/slider/delete/{id}', 'SliderController@deleteSliderInfo');


Route::get('/slider/unpublished/{id}', 'SliderController@unpublishedSliderInfo');
Route::get('/slider/published/{id}', 'SliderController@publishedSliderInfo');




Route::get('/category/add', 'CategoryController@addCategory');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/category/category-manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategoryinfo');


Route::get('/category/unpublished/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/category/published/{id}', 'CategoryController@publishedCategoryInfo');




Route::get('/product/add', 'ProductController@addProduct');
Route::post('/product/new', 'ProductController@saveProductInfo');
Route::get('/product/manage-product', 'ProductController@manageProduct');
Route::get('/product/details/{id}', 'ProductController@viewProductDetailsInfo');


Route::get('/product/edit/{id}', 'ProductController@editProductInfo');
Route::post('/product/update', 'ProductController@updateProductInfo');
Route::get('/product/delete/{id}', 'ProductController@deleteProductInfo');


Route::get('/product/unpublished/{id}', 'ProductController@unpublishedProductInfo');
Route::get('/product/published/{id}', 'ProductController@publishedProductInfo');


Route::get('/feature/add', 'FeaturesController@addFeature');
Route::post('/feature/new', 'FeaturesController@saveFeatureInfo');
Route::get('/feature/manage-feature', 'FeaturesController@manageFeature');
Route::get('/feature/details/{id}', 'FeaturesController@viewFeatureDetailsInfo');
Route::get('/feature/edit/{id}', 'FeaturesController@editFeatureInfo');
Route::post('/feature/update', 'FeaturesController@updateFeatureInfo');
Route::get('/feature/delete/{id}', 'FeaturesController@deleteFeatureInfo');





Route::get('/feature/unpublished/{id}', 'FeaturesController@unpublishedFeatureInfo');
Route::get('/feature/published/{id}', 'FeaturesController@publishedFeatureInfo');



Route::get('/notice/add', 'NoticeController@addNotice');
Route::post('/notice/new', 'NoticeController@saveNoticeInfo');
Route::get('/notice/manage-notice', 'NoticeController@manageNotice');
Route::get('/notice/details/{id}', 'NoticeController@viewNoticeDetailsInfo');
Route::get('/notice/edit/{id}', 'NoticeController@editNoticeInfo');
Route::post('/notice/update', 'NoticeController@updateNoticeInfo');
Route::get('/notice/delete/{id}', 'NoticeController@deleteNoticeInfo');


Route::get('/notice/unpublished/{id}', 'NoticeController@unpublishedNoticeInfo');
Route::get('/notice/published/{id}', 'NoticeController@publishedNoticeInfo');


Route::post('/new-comment', 'CommentController@saveCommentInfo');
Route::get('/comment/manage-comment', 'CommentController@manageComment');
Route::get('/comment/delete/{id}', 'CommentController@deleteCommentInfo');



Route::get('/client/add', 'ClientController@addClient');
Route::post('/client/new', 'ClientController@saveClientInfo');
Route::get('/client/manage-client', 'ClientController@manageClient');

Route::get('/client/details/{id}', 'ClientController@viewClientDetailsInfo');
Route::get('/client/edit/{id}', 'ClientController@editClientInfo');
Route::post('/client/update', 'ClientController@updateClientInfo');
Route::get('/client/delete/{id}', 'ClientController@deleteClientInfo');


Route::get('/client/unpublished/{id}', 'ClientController@unpublishedClientInfo');
Route::get('/client/published/{id}', 'ClientController@publishedClientInfo');




Route::get('/team/add', 'TeamController@addTeamMember');
Route::post('/team/new', 'TeamController@saveTeamMemberInfo');
Route::get('/team/manage-team', 'TeamController@manageTeamMember');

Route::get('/team/details/{id}', 'TeamController@viewTeamMemberDetailsInfo');
Route::get('/team/edit/{id}', 'TeamController@editMemberInfo');
Route::post('/team/update', 'TeamController@updateMemberInfo');
Route::get('/team/delete/{id}', 'TeamController@deleteTeamMemberInfo');



Route::get('/team/unpublished/{id}', 'TeamController@unpublishedTeamMemberInfo');
Route::get('/team/published/{id}', 'TeamController@publishedTeamMemberInfo');


Route::post('/new-contact', 'ContactController@saveContactInfo');
Route::get('/contact/manage-contact', 'ContactController@manageContact');
Route::get('/contact/delete/{id}', 'ContactController@deleteContactInfo');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
