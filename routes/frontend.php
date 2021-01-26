<?php
Route::group(['prefix' => '/', 'namespace'=>'Frontend'], function() {
    // Trang chủ
    Route::get('', 'HomeController@index')->name('home');

    // Trang đăng nhập
    Route::get('dang-nhap.html', 'UserController@login')->name('login');
    Route::post('dang-nhap.html', 'UserController@post_login')->name('post_login');
        // đăng nhập trang đặt hàng
        Route::post('dang-nhap-checkout', 'UserController@post_checkout_login')->name('post-checkout-login');
        // đăng nhập để review
        Route::post('dang-nhap-review', 'UserController@post_review_login')->name('post_review_login');
        // Đăng nhập để bình luận bài viết
        Route::post('dang-nhap-blog', 'UserController@post_login_blog')->name('post_login_blog');
    // Trang đăng ký
    Route::get('dang-ky.html', 'UserController@register')->name('register');
    Route::post('dang-ky.html', 'UserController@post_register')->name('post_register');

    // đăng xuất
    Route::get('logout', 'UserController@logout')->name('logout');
    // Tài khoản của tôi
    Route::get('tai-khoan-cua-toi.html/{id}', 'ProfileController@profile')->name('profile');
        // Cập nhật tài khoản
        Route::post('tai-khoan-cua-toi.html/{id}', 'ProfileController@post_profile')->name('post_profile');
        // Thay đổi mật khẩu
        Route::get('change_pass/{id}', 'ProfileController@change_pass')->name('change_pass');
        Route::post('change_pass/{id}', 'ProfileController@post_change_pass')->name('post_change_pass');
        // Đơn mua hàng
        Route::get('don-mua/{id}', 'ProfileController@order')->name('don-mua');
        Route::post('don-mua/{id}', 'ProfileController@update_status')->name('update_status');
        //Lịch sử mua hàng
        Route::get('lich-su/{id}', 'ProfileController@history')->name('lich-su');

    // Trang mua hàng
    Route::get('shop', 'ShopController@index')->name('shop');
    Route::get('shop/category/{slug}', 'ShopController@cate')->name('danh-muc');
    Route::get('shop_new', 'ShopController@shop_new')->name('shop_new');

    // trang bài viết
    Route::get('blog', 'BlogController@index')->name('blog');
        // trang chi tiết bài viết
        Route::get('blog_detail/{slug}', 'BlogController@detail')->name('blog_detail');
        // danh mục bài viết
        Route::get('blog/danh-muc-tin-tuc/{slug}', 'BlogController@danh_muc')->name('danh-muc-tin-tuc');
        // Bình luận bài viết
        Route::post('comment_blog', 'CommentBlogController@comment_blog')->name('comment_blog');

    // Trang giỏ hàng
    Route::get('cart', 'CartController@index')->name('cart');
        // Thêm sản phẩm vào giỏ hàng
        Route::post('cart/{id_detail}','CartController@add')->name('add-cart');
        // Xóa 1 sản phẩm trong giỏ hàng
        Route::get('cart/remove/{rowId}', 'CartController@remove')->name('remove-cart');
        // Xóa Ajax
        Route::post('remove', 'CartController@removeAjax')->name('removeAjax');
        // Cập nhật giỏ hàng
        Route::post('cart/update/{rowId}', 'CartController@update')->name('update-cart');
        // Cập nhật ajax
        Route::post('updae_cart', "CartController@updateAjax")->name('updateAjax');
        // Xóa giỏ hàng
        Route::get('cart/destroy', 'CartController@destroy')->name('destroy-cart');

    // Trang sản phẩm yêu thích
    Route::get('wishlist/{id_user}', 'WishlistController@index')->name('wishlist');
    Route::get('wishlist/add/{id_user}/{id_pro_detail}', 'WishlistController@post_wishlist')->name('post-wishlist');
        // Xóa 1 sản phẩm yêu thích
        Route::get('wishlist/delete/{id_user}/{id_wishlist}', 'WishlistController@delete_wishlist')->name('delete-wishlist');

    // Trang đặt hàng
    Route::get('checkout', 'CheckoutController@index')->name('checkout');
    Route::post('checkout', 'CheckoutController@post_checkout')->name('post-checkout');

    // Trang chi tiết sản phẩm
    Route::get('product_detail/{slug}/{id_detail}', 'Product_detailController@index')->name('product_detail');

    // Trang liên hệ
    Route::get('contact', 'ContactController@index')->name('contact');

    // Đánh giá sản phẩm
    Route::post('review/{slug}', 'ReviewController@review')->name('review');

    // Trang tìm kiếm
    Route::get('search', 'SearchController@search')->name('search');

    //Quên mật khẩu
    Route::get('recoverpass', 'PasswordResetController@recoverpass')->name('recoverpass');
    Route::post('recoverpass', 'PasswordResetController@sendmail')->name('sendmail');
    Route::get('dat-lai-mat-khau/{token}', 'PasswordResetController@new_pass')->name('new_pass');
    Route::post('dat-lai-mat-khau/{token}', 'PasswordResetController@post_newPass')->name('post_newPass');
});

 ?>
