<?php

// Trang chủ
Route::get('/', 'ShopController@index');
// the loai
Route::get('category/{id}', 'ShopController@getProductsByCategory')->name('shop.getProductsByCategory');

// Chi tiet sản phẩn
Route::get('/{category}/{slug}_{id}', 'ShopController@getProduct')->name('shop.product');

Route::get('/tim-kiem', 'GeneralController@search')->name('shop.search');

// Gio hang
Route::get('/dat-hang', 'ShopController@getCart')->name('shop.cart');

// Liên Hệ
Route::resource('contact', 'ContactController');


Route::group(['prefix' => 'admin','as' => 'admin.'], function() {

    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    // QL Banner
    Route::resource('banner', 'BannerController');
    // QL Thương Hiệu
    Route::resource('brand', 'BrandController');
    // QL Nhà Cung Cấp
    Route::resource('vendor', 'VendorController');
    // Ql Người dùng
    Route::resource('user', 'UserController');
     // Ql blog
     Route::resource('blog', 'BlogController');
});

Auth::routes();

Route::get('/danh-muc/{slug}', 'ShopController@getProductsByCategory')->name('shop.category');
