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

Auth::routes();
Route::get('/', 'HomeController@showindex')->name('home');
Route::get('/search','SearchController@search');
Route::get('/searchroom','SearchController@searchroom');
Route::get('/hoteldetail/{id}','HotelDetailController@showpage');
Route::get('/blog/{id}', 'HomeController@single_blog');
Route::get('/listroominhotel/{id}', 'RoomDetailController@showpage');
Route::get('/roomdetail/{id}', 'RoomdetailController@showdetail');
Route::get('/booktotal', 'BooktotalController@showpage');
Route::post('/booktotal', 'BooktotalController@postbill');
Route::get('/booktotal/{id}', 'BooktotalController@addroom');
Route::get('/delroom/{id}', 'BooktotalController@delroom');

Route::get('/book-active/{id1}/{id2}/', 'BooktotalController@bookActive');
Route::group([
    'middleware'=>'admin'
],function(){
    Route::get('/admin','AdminController@index');
    Route::get('/admin/hotels','AdminController@getHotels');
    Route::get('admin/hotels/delete/{id}','AdminController@delhotel');
    Route::get('admin/hotels/create','AdminController@createHotels');
    Route::post('admin/hotels/create','AdminController@postHotels');
    Route::get('admin/places/create','AdminController@createPlaces');
    Route::post('admin/places/create','AdminController@postPlaces');
    Route::get('admin/hotels/edit/{id}','AdminController@editHotel');
    Route::post('admin/hotels/edit/{id}','AdminController@posteditHotel');
    Route::get('admin/listadmin/{id}','AdminController@getlistadinhotel');

    Route::get('/admin/rooms','AdminController@getRooms');
    Route::get('admin/rooms/delete/{id}','AdminController@delroom');
    Route::get('admin/rooms/create','AdminController@createRooms');
    Route::post('admin/rooms/create','AdminController@postRooms');
    Route::get('admin/listroom/{id}','AdminController@getlistroominhotel');

    Route::get('admin/rooms/edit/{id}','AdminController@editRoom');
    Route::post('admin/rooms/edit/{id}','AdminController@posteditRoom');
    Route::get('admin/orders','AdminController@getorders');
    Route::get('/admin/order/detail/{id}','AdminController@getorderdetail');



    Route::get('/admin/blogs','AdminController@getBlogs');
    Route::get('/admin/blogs/awaiting','AdminController@getBlogsAwaiting');
    Route::get('/admin/blogs/approved/{id}','AdminController@approvedBlog');
    Route::get('/admin/blogs/create','AdminController@createBlogs');
    Route::get('/admin/blogs/edit/{id}','AdminController@editBlogs');
    Route::get('/admin/blogs/delete/{id}', 'AdminController@deleteBlogs');
    Route::get('/admin/blogs/catagory/{id}', 'AdminController@getBlogsByCata');
    Route::get('/admin/blogs/tag/{id}', 'AdminController@getBlogsByTag');
    Route::get('/admin/blog/{id}', 'AdminController@getBlogById');
    Route::Post('/admin/blogs/store', 'AdminController@storeBlogs');
    Route::Post('/admin/blogs/update/{id}', 'AdminController@updateBlog');

    Route::group([
        'middleware'=>'writer'
    ],function(){
        Route::get('/admin/catagories/create', 'AdminController@createCatagories');
        Route::get('/admin/catagories/edit/{id}', 'AdminController@editCatagories');
        Route::get('/admin/catagories/delete/{id}', 'AdminController@deleteCatagories');
        Route::Post('/admin/catagories/store', 'AdminController@storeCatagory');
        Route::Post('/admin/catagories/update/{id}', 'AdminController@updateCatagory');

        Route::get('/admin/tags', 'AdminController@getTags');
        Route::get('/admin/tags/create', 'AdminController@createTags');
        Route::get('/admin/tags/edit/{id}', 'AdminController@editTag');
        Route::get('/admin/tags/delete/{id}', 'AdminController@deleteTag');
        Route::Post('/admin/tags/store','AdminController@storeTag');
        Route::Post('/admin/tags/update/{id}', 'AdminController@updateTag');

        Route::get('/admin/profile/admin/{id}', 'AdminController@getAdminById');

        Route::get('/admin/profile', 'AdminController@getProfile');
        Route::get('/admin/profile/edit', 'AdminController@editProfile');
        Route::Post('/admin/profile/update', 'AdminController@updateProfile');
        Route::get('/admin/profile/change-password', 'AdminController@editPassword');
        Route::Post('/admin/profile/update-password', 'AdminController@updatePassword');
    });


    Route::get('/admin/email', 'EmailController@getEmail');
    Route::get('/admin/email/email-sent/{id}', 'EmailController@getEmailSent');
    Route::get('/admin/email/{id}', 'EmailController@getEmailByCategory');
    Route::get('/admin/email/email-view/{id}', 'EmailController@getEmailView');
    // Route::get('/admin/email/email-compose', 'EmailController@getEmailCompose');
    Route::get('/admin/email/email-compose/{id}', 'EmailController@getEmailCompose');
    Route::post('/admin/email/email-send', 'EmailController@sendEmail');
    Route::get('/admin/email/email-delete/{id}', 'EmailController@delEmail');
    Route::get('/admin/email/email-read/{id}', 'EmailController@readEmail');
    Route::get('/admin/email/email-trash/{id}', 'EmailController@getEmailFromTrash');
    Route::get('/admin/email/email-restore/{id}', 'EmailController@restoreEmail');

    Route::get('/admin/feedback-list', 'FeedbackController@getListFeedback');
    Route::get('/admin/feedback-list/action/{id}/{id2}', 'FeedbackController@Approve');

});
Route::get('/verify','AdminController@notiVerify');
Route::get('/admin/admins', 'AdminController@getAdmins');
Route::get('/admin/Admins/verify/{id}', 'AdminController@verifyAdmins');

Route::post('/admin/image/upload', 'ImageController@uploadImage');
Route::post('/admin/image/delete', 'ImageController@deleteImage');


Route::get('/demo', 'HomeController@demo');
Route::get('/roomlist', 'RoomlistController@showpage');
Route::get('/roomdetail', 'RoomdetailController@showpage');
Route::get('/contact', 'ContactController@showpage')->name('contact');
Route::post('/contact', 'ContactController@PostContact');


//Route::get('/roomgrid', 'RoomgridController@showpage');
Route::get('/blog', 'BlogController@showpage');
Route::get('/hotellist','HotelListController@showpage')->name('hotellist');
Route::get('/roomgrid', 'RoomgridController@showpage');
Route::get('/blog', 'BlogController@showpage')->name('blog');
Route::get('/blogs/catagory/{id}', 'BlogController@getBlogsByCata');


Route::get('/blogdetail/{id}', 'BlogdetailController@getBlogById');
Route::get('/privacy', 'PrivacyController@showpage');
Route::get('/feedback/{id1}/{id2}/', 'FeedbackController@showpage');
Route::post('/feedback', 'FeedbackController@PostFeedback')->name('feedback');
Route::get('/team', 'TeamController@showpage')->name('team');


Route::get('/demoaa','BooktotalController@Quantityaaaa');