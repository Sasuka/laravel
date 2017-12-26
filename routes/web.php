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
    return view('welcome');
});
Route::get('/home', function () {
    return 'This is my home';
});
Route::get('/string', 'HomeController@showWellcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('wellcome', 'WellcomeController@show');
Route::get('course', function () {
    echo 'Learn programming laravel framework';
    return redirect()->route('hcm');

});
Route::get('course1/{learn?}', function ($learn = '') {
    return 'Learn course ' . $learn;
})
->where(['learn' =>'[a-z]+']);
Route::get('call-view', function (){
    $name = 'Lê Tiến Tài';
    $personal = 'Developer';
   return view('test', compact('name','personal'));
});
/*Form định danh*/
Route::get('ho-chi-minh',['as'=>'hcm', function(){
    return 'Ho Chi Minh City';
}]);
/*Group tránh gõ lại nhiều lần trùng lặp*/
Route::group(['prefix'=>'menu'], function (){
   Route::get('bun-mam', function (){
       echo 'Đây là bún mắm';
   }) ;
    Route::get('bun-moc', function (){
        echo 'Đây là bún moc';
    }) ;
    Route::get('bun-cha', function (){
        echo 'Đây là bún cha';
    }) ;
});
Route::get('call-master', function (){
   return view('views.sub');
});

