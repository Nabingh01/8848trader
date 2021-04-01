<?php

use App\Http\Controllers\AllCourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SuscribtionController;
use App\Http\Controllers\UpCourseController;
use App\Models\AllCourse;
use App\Models\Course;
use App\Models\Notice;
use App\Models\UpCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    $response = Http::get("https://fcsapi.com/api-v3/forex/list?type=forex&access_key=njJgtZrs85vkuBU3fNrfSn");
 
    $data =  $response->json()['response'];
    // // return $data[0]['name'];
    $notice = Notice::all();
    return view('frontend.pages.index',compact('notice','data'));
});

// p

Route::get('indicescommunity',function(){
    return view('frontend.pages.tradingcommunity');
});
Route::get('stockmarketcommunity',function(){
    return view('frontend.pages.tradingcommunity1stpage');
});
Route::get('contact',function(){
    return view('frontend.pages.contact');
});
Route::get('subscribe',function(){
    $allcourse =AllCourse::all();
    return view('frontend.pages.suscribe',compact('allcourse'));
});
Route::get('ourcourse',function(){
    $course =Course::all();
    $upcomming = UpCourse::all();
    return view('frontend.pages.courses',compact('course','upcomming'));
});
Route::get('apply',function(){
    $allcourse = AllCourse::all();
    return view('frontend.pages.applynow' ,compact('allcourse'));
});

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//message
Route::resource('messages',MessageController::class);
//suscribtion
Route::resource('suscribtions',SuscribtionController::class);

//apply
Route::resource('applydetail',ApplyController::class);

Route::group(['middleware'=>'admin'],function(){
//backend course
Route::resource('courses',CourseController::class);
//upcomming classes
Route::resource('upcourses',UpCourseController::class);
//ALL Courses
Route::resource('allcourses',AllCourseController::class);
//notice
Route::resource('notice',NoticeController::class);
// register
Route::get('registeradmin',function(){
    return view('backend.register.create');
});
});
