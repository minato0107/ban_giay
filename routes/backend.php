<?php
Route::group(['prefix' => 'admin', 'namespace'=>'Backend', 'middleware'=>'admin'], function() {
    Route::get('', 'AdminController@index')->name('admin');

    // Danh mục
    Route::resource('category', 'CategoryController');
    // Sản phẩm
    Route::resource('product', 'ProductController');
        // thuộc tính sản phẩm
        Route::resource('attr', 'AttributeController');
        // Chi tiết sản phẩm
        Route::get('product/{id}/product_detail', 'Product_detailController@index')->name('product_detail.index');
        Route::post('product/{id}/product_detail', 'Product_detailController@store')->name('product_detail.store');
        Route::get('product/{id}/product_detail/{id_detail}/edit', 'Product_detailController@edit')->name('product_detail.edit');
        Route::post('product/{id}/product_detail/{id_detail}/edit', 'Product_detailController@update')->name('product_detail.update');
        Route::get('product/{id}/product_detail/{id_detail}', 'Product_detailController@destroy')->name('product_detail.destroy');
        // đánh giá sản phẩm
        Route::get('/review', 'ReviewController@index')->name('review.index');
        Route::get('/review/{id}', 'ReviewController@update')->name('review.update');

    // Tin tức
    Route::resource('blog', 'BlogController');
    // Banner
    Route::resource('banner', 'BannerController');
    // Config
        // logo
        Route::resource('logo', 'LogoController');
        // contact
        Route::resource('contact', 'ContactController');
        // ads
        Route::resource('ads', 'AdsController');
    // User
    Route::get('user', 'AdminController@user_manager')->name('user.manager');
    Route::post('user/{id}', 'AdminController@delete_user')->name('user.delete');
    // Đơn hàng
    Route::get('order', 'OrderController@index')->name('order.index');
        // Chi tiết đơn hàng
        Route::get('order_detail/{id_order}', 'Order_detailController@index')->name('order_detail.index');
        //Cập nhật trạng thái đơn hàng
        Route::post('order_detail/{id_order}', 'Order_detailController@status')->name('order_detail.status');
    // Thống kê
    Route::get('ton-kho', 'StatisticalController@ton_kho')->name('ton-kho');
    Route::get('ban-chay', 'StatisticalController@ban_chay')->name('ban-chay');
    Route::get('doanh-thu', 'StatisticalController@doanh_thu')->name('doanh-thu');
    });

    // Trang đăng nhập admin
    Route::get('/admin/login', 'Backend\AdminController@login')->name('admin.login');
    Route::post('/admin/login', 'Backend\AdminController@post_login')->name('admin.post_login');
        // đăng xuất
        Route::get('/admin/logout', 'Backend\AdminController@logout')->name('admin.logout');

    // Trang đăng ký người dùng để quản trị web(dùng phân quyền)
    Route::get('/admin/register_auth', 'Backend\AuthController@register_auth')->name('register_auth');
    Route::post('/admin/register_auth', 'Backend\AuthController@post_register_auth')->name('post_register_auth');
 ?>
