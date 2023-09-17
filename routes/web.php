<?php
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ConnectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function(){
Route::get('/login',[AuthController::class,'index']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'index2']);
Route::post('/register',[AuthController::class,'register']);
});

Route::get('home',[AuthController::class,'redirect'])->middleware('auth','verified');

Route::group(['middleware'=>'auth'],function(){
Route::get('logout',[AuthController::class,'logout']);
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::resources([
    'posts'              =>      PostController::class,
    'comments'    =>      CommentController::class,
    'connections'                =>      ConnectionController::class
    
]);