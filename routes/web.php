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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return view('Depression');
});
Route::get('/doctor', function () {
    return view('Doctor');
});



Route::get('/eva', function () {
    return view('evaform');
})->name('eva');

Route::post('/result', function(Request $request) {
    $sum = 0;
    $sum += Input::get('question-1-answers', 99);
    $sum += Input::get('question-2-answers', 99);
    $sum += Input::get('question-3-answers', 99);
    $sum += Input::get('question-4-answers', 99);
    $sum += Input::get('question-5-answers', 99);
    $sum += Input::get('question-6-answers', 99);
    $sum += Input::get('question-7-answers', 99);
    $sum += Input::get('question-8-answers', 99);
    $sum += Input::get('question-9-answers', 99);
    $sum += Input::get('question-10-answers', 99);
    return view('result')->with(['score'=> $sum]);
});


Auth::routes();

Route::get('/chats/{id}', function ($id) {
    return view('chats', compact('id'));
});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('diary', 'DiaryController');

