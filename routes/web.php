<?php


/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'Homecontroller@index');
Route::get('/single_person', 'Homecontroller@single_person');
Route::post('/login', 'Homecontroller@login');
Route::get('/exit', 'Homecontroller@exit');
Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'Homecontroller@pagenotfound']);


/*******************************************start drop zone */

Route::post('/formSubmit', 'UserController@formSubmit');

Route::post('/nashriye_Dropzone', 'Homecontroller@nashriye_Dropzone');

/*Route::post('/news_DropzoneRemove', 'Homecontroller@news_DropzoneRemove');*/


Route::post('/employ_Dropzone', 'Homecontroller@get_employ_Dropzone');
/*Route::post('/employ_Dropzone1', 'adminController@get_employ_Dropzone1');*/


/****************************************start news upload file*/


Route::post('/ckeditor/ckeditor_upload_news_add', 'adminController@ckeditor_upload_news_add')->name('upload');
Route::post('/ckeditor/ckeditor_upload_news_edit/{id_news}', 'adminController@ckeditor_upload_news_edit')->name('upload');

Route::post('/news_Dropzone', 'adminController@news_Dropzone');
Route::post('/news_DropzoneRemove', 'adminController@news_DropzoneRemove');




Route::post('/news_DropzoneRemove_edit', 'adminController@news_DropzoneRemove_edit');
Route::post('/news_Dropzone_edit/{id}', 'adminController@news_Dropzone_edit');

Route::post('/get_news_img', 'adminController@get_news_img');


/****************************************end news upload file*/

/****************************************start product upload file*/


Route::post('/ckeditor/ckeditor_upload_product_add', 'adminController@ckeditor_upload_product_add')->name('upload');
Route::post('/ckeditor/ckeditor_upload_product_edit/{id_product}', 'adminController@ckeditor_upload_product_edit')->name('upload');


Route::post('/product_Dropzone', 'adminController@product_Dropzone');
Route::post('/product_Dropzone_edit/{id}', 'adminController@product_Dropzone_edit');


Route::post('/product_DropzoneRemove', 'adminController@product_DropzoneRemove');
Route::post('/product_DropzoneRemove_edit', 'adminController@product_DropzoneRemove_edit');


Route::post('/get_product_img', 'adminController@get_product_img');


/****************************************end product upload file*/

/****************************************start employment upload file*/

Route::post('/ckeditor/ckeditor_upload_employment_add', 'adminController@ckeditor_upload_employment_add')->name('upload');

Route::post('/ckeditor/ckeditor_upload_employment_edit/{id_employment}', 'adminController@ckeditor_upload_employment_edit')->name('upload');


/****************************************end employment upload file*/


/****************************************start  product lesson upload file*/
Route::post('/product_lesseon_Dropzone', 'adminController@product_lesseon_Dropzone');
Route::post('/product_lesseon_DropzoneRemove', 'adminController@product_lesseon_DropzoneRemove');
Route::post('/product_lesseon_DropzoneRemove_edit', 'adminController@product_lesseon_DropzoneRemove_edit');

Route::post('/product_lesson_Dropzone_edit/{id}', 'adminController@product_lesson_Dropzone_edit');
Route::post('/get_product_lesson_video', 'adminController@get_product_lesson_video');

/****************************************end  product lesson upload file*/


/****************************************start khadamat upload file*/

Route::post('/ckeditor/ckeditor_upload_khadamat_add', 'adminController@ckeditor_upload_khadamat_add')->name('upload');
Route::post('/ckeditor/ckeditor_upload_khadamat_edit/{id_khadamat}', 'adminController@ckeditor_upload_khadamat_edit')->name('upload');


Route::post('/khadamat_Dropzone', 'adminController@khadamat_Dropzone');
Route::post('/khadamat_Dropzone_edit/{id}', 'adminController@khadamat_Dropzone_edit');

Route::post('/khadamat_DropzoneRemove', 'adminController@khadamat_DropzoneRemove');
Route::post('/khadamat_DropzoneRemove_edit', 'adminController@khadamat_DropzoneRemove_edit');


Route::post('/khadamat_Dropzone_slider', 'adminController@khadamat_Dropzone_slider');
Route::post('/khadamat_Dropzone_slider_edit/{id}', 'adminController@khadamat_Dropzone_slider_edit');


Route::post('/khadamat_Dropzone_slider_remove', 'adminController@khadamat_Dropzone_slider_remove');
Route::post('/khadamat_Dropzone_slider_remove_edit', 'adminController@khadamat_Dropzone_slider_remove_edit');


Route::post('/get_kadamat_shakes_img', 'adminController@get_kadamat_shakes_img');


/****************************************end khadamat upload file*/
/****************************************start  employment_rezome upload file*/

Route::post('/rezome_Dropzone_edit', 'adminController@rezome_Dropzone_edit');
Route::post('/rezome_DropzoneRemove_edit', 'adminController@rezome_DropzoneRemove_edit');
Route::post('/get_rezome_img', 'adminController@get_rezome_img');

/****************************************end  employment_rezome upload file*/
/****************************************start  user upload file*/
Route::post('/user_Dropzone_edit', 'UserController@user_Dropzone_edit');
Route::post('/user_DropzoneRemove_edit', 'UserController@user_DropzoneRemove_edit');
Route::get('/get_user_img', 'UserController@get_user_img');


/****************************************end  user upload file*/


/*******************************************end drop zone */

Route::group(['prefix' => 'user'], function () {

    Route::get('/index', 'UserController@index');
    Route::get('/account', 'UserController@account');
    Route::get('/get_register_attr', 'UserController@get_register_attr');
    Route::post('/save_register_attr', 'UserController@save_register_attr');
    Route::get('/kadamat_refahi', 'UserController@get_kadamat_refahi');
    Route::get('/kadamat_refahi_detail', 'UserController@get_kadamat_refahi1');
    Route::get('/products', 'UserController@get_products');
    Route::post('/add_article_row', 'UserController@add_article_row');
    Route::post('/remove_article_row', 'UserController@remove_article_row');
    Route::post('/add_talif_row', 'UserController@add_talif_row');
    Route::post('/remove_talif_row', 'UserController@remove_talif_row');
    Route::post('/add_karafrin_row', 'UserController@add_karafrin_row');
    Route::post('/remove_karafrin_row', 'UserController@remove_karafrin_row');
    Route::post('/add_savabegh_row', 'UserController@add_savabegh_row');
    Route::post('/remove_savabegh_row', 'UserController@remove_savabegh_row');
    Route::get('/login', 'UserController@get_lgoin');
    Route::post('/login1', 'UserController@login');
    Route::get('/pass', 'UserController@pass');
    Route::post('/changePass', 'UserController@change_pass');
    Route::post('/productAddToBasket', 'UserController@productAddToBasket');
});
Route::group(['prefix' => 'admin'], function () {

    Route::get('/index', 'adminController@index');
    Route::get('/getStudents', 'adminController@getStudents');
    Route::get('/student_add', 'adminController@student_add');
    Route::post('/student_save', 'adminController@save_student');
    Route::get('/get_all_users', 'adminController@get_all_users');

    Route::get('/get_all_users1', 'adminController@get_all_users1');

    Route::get('/get_all_users_state_dore', 'adminController@get_all_users_state_dore');
    Route::post('/get_user_attr_withValue', 'adminController@get_user_attr_withValue');
    Route::get('/nashriye', 'adminController@get_nashriye');
    Route::get('/nashriye_add', 'adminController@get_nashriye_add');
    Route::post('/save_nashriye', 'adminController@save_nashriye');
    Route::get('/getLastGroupNashriye', 'adminController@getLastGroupNashriye');
    Route::post('/nashriye_delete', 'adminController@deleteNashriye');
    Route::post('/current_Nahsriye', 'adminController@get_current_Nahsriye');
    Route::get('/employment', 'adminController@getEmployment');
    Route::get('/employment_add', 'adminController@getEmployment_add');
    Route::post('/employSave', 'adminController@employSave');
    Route::post('/get_employ_rezome_sendted', 'adminController@get_employ_rezome_sendted');
    Route::get('/employ_rezome', 'adminController@get_employ_rezome');
    Route::get('/employ_rezome_sent', 'adminController@get_employ_rezome_sent');
    Route::get('/category_product', 'adminController@get_category_product');
    Route::post('/cat_childerns/{id}', 'adminController@get_cat_childerns');
    Route::post('/deleteCats', 'adminController@deleteCats');
    Route::post('/addCat', 'adminController@addCat');
    Route::get('/product', 'adminController@get_product');
    Route::get('/get_products', 'adminController@get_products');
    Route::get('/get_products_home', 'adminController@get_products_home');
    Route::get('/get_products_majale', 'adminController@get_products_majale');
    Route::post('/addProduct', 'adminController@addProduct');
    Route::get('/product_add', 'adminController@get_product_add');
    Route::post('/product_lesson/{id}', 'adminController@get_product_lesson');
    Route::get('/kadamat_refahi', 'adminController@get_kadamat_refahi');
    Route::get('/kadamat_refahi_add', 'adminController@get_kadamat_refahi_add');
    Route::get('/kadamat_refahi_data', 'adminController@get_kadamat_refahi_data');
    Route::post('/kadamat_refahi_filter_sidebar', 'adminController@get_kadamat_refahi_filter_sidebar');
    Route::post('/kadamat_employment_filter_sidebar', 'adminController@get_employment_refahi_filter_sidebar');
    Route::post('/product_refahi_filter_sidebar', 'adminController@get_product_refahi_filter_sidebar');
    Route::post('/product_refahi_filter_sidebar_majale', 'adminController@get_product_refahi_filter_sidebar_majale');
    Route::post('/save_kadamat', 'adminController@save_kadamat');
    Route::post('/current_kadamat', 'adminController@get_current_kadamat');
    Route::post('/kadamat_delete', 'adminController@kadamat_delete');
    Route::post('/save_product_lesson', 'adminController@save_product_lesson');
    Route::get('/login', 'adminController@get_lgoin');
    Route::post('/login_admin', 'adminController@login');
    Route::get('/news_add', 'adminController@get_news_add');
    Route::post('/addNews', 'adminController@addNews');
    Route::get('/news', 'adminController@get_news');
    Route::get('/getNews', 'adminController@get_news1');
    Route::post('/news_delete', 'adminController@deleteNews');
    Route::post('/employment_delete', 'adminController@employment_delete');
    Route::post('/product_delete', 'adminController@product_delete');
    Route::post('/product_lesson_delete', 'adminController@product_lesson_delete');
    Route::get('/contactToLeader', 'adminController@get_contactToLeader');
    Route::get('/get_contactToLeader1', 'adminController@get_contactToLeader1');
    Route::post('/is_repeated', 'adminController@is_repeated');
    Route::post('/email_leader_answer', 'adminController@email_leader_answer');
    Route::get('/get_charts', 'adminController@get_charts');
    Route::get('/exit_admin', 'adminController@exit');

    Route::post('/leader_mess_delete', 'adminController@leader_mess_delete');

    Route::get('/user_pdf/{id}', 'adminController@user_pdf');
});

Route::group(['prefix' => 'home'], function () {

    Route::get('/persons', 'Homecontroller@persons');
    Route::get('/basket', 'Homecontroller@basket');
    Route::get('/nashriye', 'Homecontroller@nashriye');
    Route::get('/persons_detail/{id}', 'Homecontroller@persons_detail');
    Route::get('/get_nashriye', 'Homecontroller@get_nashriye');
    Route::get('/employment', 'Homecontroller@get_employment');
    /* Route::post('testUrl/{id}', 'Homecontroller@employSave');*/
    Route::get('get_all_employment', 'Homecontroller@get_all_employment');
    Route::get('/employment_detail/{id}', 'Homecontroller@employment_detail');
    Route::post('/employment_rezome_save', 'Homecontroller@employment_rezome_save');
    Route::get('/contactToLeader', 'Homecontroller@contactToLeader');
    Route::get('/contactToLeader1', 'Homecontroller@contactToLeader1');
    Route::post('/save_leaderComment', 'Homecontroller@save_leaderComment');

    Route::get('/news', 'Homecontroller@get_news');
    Route::get('/news1', 'Homecontroller@get_news1');


    Route::get('/news_single/{id}', 'Homecontroller@get_news_single');
    Route::get('/employment_single/{id}', 'Homecontroller@get_employment_single');
    Route::get('/shop', 'Homecontroller@get_shop');
    Route::get('/shop_product', 'Homecontroller@get_shop_product');
    Route::get('/shop_product_majale', 'Homecontroller@get_shop_product_majale');
    Route::get('/shop_single/{id}', 'Homecontroller@get_shop_single');
    Route::get('/shop_single_product/{id}', 'Homecontroller@get_shop_single_product');
    Route::post('/kadamat_refahi_search', 'Homecontroller@get_kadamat_refahi_search');
    Route::post('/product_refahi_search', 'Homecontroller@get_product_refahi_search');
    Route::post('/product_refahi_search_majale', 'Homecontroller@get_product_refahi_search_majale');

});

Route::post('testUrl', 'Homecontroller@employSave');
/*************************pdf */
Route::get('/customers/pdf', 'adminController@export_pdf');

/*******************************mail*/






