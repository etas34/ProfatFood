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
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'], function() {

Route::get('/', 'MainController@index')->name('anasayfa');

Route::get('/bsf-canli-larva', 'UrunlerController@canli')->name('bsf-canli');
Route::get('/bsf-kuru-larva', 'UrunlerController@kuru')->name('bsf-kuru');
Route::get('/bsf-larva-unu', 'UrunlerController@ogutulmus')->name('bsf-ogutulmus');
Route::post('/satis_post', 'UrunlerController@satis_post')->name('bsf-satis_post');

Route::get('/sozlesme', 'ProsedurlerController@sozlesme')->name('sozlesme');
Route::get('/iade', 'ProsedurlerController@iade')->name('iade');
Route::get('/gizlilik', 'ProsedurlerController@gizlilik')->name('gizlilik');


Route::get('/satis1', 'SatisController@satis1')->name('satis1');
Route::post('/satis1', 'SatisController@satis1_post')->name('satis1_post');
Route::get('/satis2', 'SatisController@satis2')->name('satis2');
Route::post('/satis2', 'SatisController@satis2_post')->name('satis2_post');
Route::get('/satis3', 'SatisController@satis3')->name('satis3');


Route::post('/satis_son', 'SatisController@satis_son')->name('satis_son');



Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/canli-yem-kara-asker-sinegi-larvası', 'BlogController@yazi1')->name('blog_yazi1');
Route::get('/alternatif-protein-kaynagi', 'BlogController@yazi2')->name('blog_yazi2');
Route::get('/bsf-turkiyenin-minik-askerleri', 'BlogController@yazi3')->name('blog_yazi3');

Route::post('/', 'MailController@mail_anasayfa')->name('mail_anasayfa');


Route::get('/reset', function(){
    Artisan::call('config:cache');

    Artisan::call('cache:clear');

});

    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);

Route::get('/logout', 'HomeController@logout')->name('logout2');

Route::get('/home', 'HomeController@index')->name('home');

/////////////ADMIN Sayfası///////////////////
///

Route::get('/admin/urunler', 'admin\UrunlerController@index')->name('admin.urunler');
Route::get('/admin/urunler/edit/{id}', 'admin\UrunlerController@edit')->name('admin.urunler.edit');
Route::post('/admin/urunler/update/{id}', 'admin\UrunlerController@update')->name('admin.urunler.update');


Route::get('/admin/yenisiparis', 'admin\SiparisController@yeni')->name('admin.siparis.yeni');
Route::get('/admin/sevksiparis/{id}', 'admin\SiparisController@sevk')->name('admin.siparis.sevk');
Route::post('/admin/updatesiparis/{id}', 'admin\SiparisController@update')->name('admin.siparis.update');
Route::get('/admin/eskisiparis', 'admin\SiparisController@eski')->name('admin.siparis.eski');

});
