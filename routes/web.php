<?php

use App\Http\Controllers\AllCourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FirstWeekController;
use App\Http\Controllers\FourthweekController;
use App\Http\Controllers\InboxApplyController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\InboxSubscribeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SecondWeekController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SuscribtionController;
use App\Http\Controllers\ThirdWeekController;
use App\Http\Controllers\UpCourseController;
use App\Models\AllCourse;
use App\Models\Course;
use App\Models\FirstWeek;
use App\Models\FourthWeek;
use App\Models\Notice;
use App\Models\Resource;
use App\Models\SecondWeek;
use App\Models\ThirdWeek;
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
    // $response = Http::get("https://financialmodelingprep.com/api/v3/fx?apikey=dc7cd28c7d105e037b79e74239c31f0a");
 
    // $data =  $response->json()['response'];
    // // return $data[0]['name'];s
    $notice = Notice::all();
    return view('frontend.pages.index',compact('notice'));
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

// clients login
Route::get('/registration',function(){
    return view('frontend.pages.clientslogin.register');
});
Route::get('/material',function(){
    $resource = Resource::all();
    return view('frontend.pages.resource',compact('resource'));
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
// inbox message
Route::resource('inbox',InboxController::class);
// inbox subscribe
Route::resource('inboxsubscribe',InboxSubscribeController::class);
//inbox apply
Route::resource('inboxapply',InboxApplyController::class);
// resource Controller
Route::resource('resources',ResourceController::class);
// 
Route::resource('permitcourse',StudentController::class);
// 
Route::resource('firstweek',FirstWeekController::class);
// 
Route::resource('secondweek',SecondWeekController::class);
// 
Route::resource('thirdweek',ThirdWeekController::class);
// 
Route::resource('fourthweek',FourthweekController::class);
});
Route::get('signup',[ClientController::class,'create']);
Route::post('signup',[ClientController::class,'store']);

