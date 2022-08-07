<?php

use Illuminate\Support\Facades\Route;

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
//一般ページ
Route::get('/', [App\Http\Controllers\PageController::class,'top'])->name('index');
Route::get('/about', function () { return view('contents.about'); })->name('about');
Route::get('/kojin', function () { return view('contents.kojin'); })->name('kojin');
Route::get('/inquiry', [App\Http\Controllers\InquiryController::class,'show']);
Route::post('/inquiry',  [App\Http\Controllers\InquiryController::class,'sendInquiry'])->name('inquiry');
// Route::post('/guest_inquiry', [App\Http\Controllers\MailController::class,'inquiryMail'])->name('inquiry_guest');
Route::get('/order_note', [App\Http\Controllers\NoteController::class,'showOrderNote'])->name('order_note');
// Route::post('/order_note_confirm', [App\Http\Controllers\NoteController::class,'showOrderNoteConfirm'])->name('order_note_confirm');
Route::post('/send_order_note', [App\Http\Controllers\NoteController::class,'sendOrderNote'])->name('send_order_note');
Route::get('/output/pdf', [App\Http\Controllers\PdfOutputController::class, 'output']);

//ログイン管理必要
Route::group(['middleware' => ['auth']], function () {
    Route::post('/show_album', [App\Http\Controllers\PageController::class,'showAlbum']);
    Route::post('/show_pics', [App\Http\Controllers\PageController::class,'getpics']);
    Route::post('/pic_up', [App\Http\Controllers\PageController::class,'getmaster']);
    Route::get('/show_album', function () { return redirect('/');});
    Route::post('/user_inquiry', [App\Http\Controllers\MailController::class,'inquiryMail'])->name('user_inquiry');

    //会員ページ
    Route::get('/dashboard', function () { return view('users.dashboard');})->middleware(['auth'])->name('dashboard');
    Route::get('/pic_upload', function () { return view('users.pic_upload');})->middleware(['auth'])->name('pic_upload');
    Route::get('/profile', function () { return redirect('dashboard');})->middleware(['auth'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\MembersController::class,'modify'])->middleware(['auth'])->name('profile');
    Route::post('/user_change', [App\Http\Controllers\MembersController::class,'userChange'])->middleware(['auth'])->name('user_change');
    Route::post('/user_pics', [App\Http\Controllers\UserPicsController::class,'getpics'])->middleware(['auth']);
    Route::post('/save_pics', [App\Http\Controllers\UserPicsController::class,'savepics'])->middleware(['auth']);
    Route::post('/get_master', [App\Http\Controllers\UserPicsController::class,'getmaster'])->middleware(['auth']);
    Route::post('/delete_pic', [App\Http\Controllers\UserPicsController::class,'deletepic'])->middleware(['auth']);
    Route::post('/save_title', [App\Http\Controllers\UserPicsController::class,'savetitle'])->middleware(['auth']);
    Route::get('/inquiry_auth', [App\Http\Controllers\InquiryController::class,'show_auth'])->name('inquiry_auth');
    Route::post('/inquiry_auth', [App\Http\Controllers\InquiryController::class,'sendInquiry'])->name('inquiry_auth');
    Route::get('/order_note_auth', [App\Http\Controllers\NoteController::class,'showOrderNoteAuth'])->name('order_note_auth');
    Route::post('/send_order_note_auth', [App\Http\Controllers\NoteController::class,'sendOrderNote'])->name('send_order_note_auth');
});

//管理者ログイン
Route::get('admin_login', [\App\Http\Controllers\AdminAuthController::class, 'showLoginForm'])->name('admin_login');
Route::post('admin_login', [\App\Http\Controllers\AdminAuthController::class, 'login']);
//管理者ログアウト
Route::post('admin_login/logout', [\App\Http\Controllers\AdminAuthController::class, 'logout'])->middleware(['auth:admins'])->name('admin_logout');

//管理者ページ
Route::prefix('admins')->middleware(['auth:admins'])->group(function(){
  Route::get('/', function () { return redirect('admins/kanri_main');});
  Route::get('/kanri_main', function () { return view('admin.kanri_top');})->name('adminmain');
  Route::get('/user_list', [\App\Http\Controllers\AdminController::class, 'userList'])->name('user_list');
  Route::get('/admin_profile', function () { return view('admin.admin_profile');})->name('admin_profile');
  Route::post('/admin_profile', function () { return view('admin.admin_profile');});
  Route::post('/user_delete', [\App\Http\Controllers\AdminController::class, 'userDelete']);
  Route::post('/user_change', [\App\Http\Controllers\AdminController::class, 'userChange']);
  Route::get('/admin_list', [\App\Http\Controllers\AdminController::class, 'adminList'])->name('admin_list');
  Route::post('/admin_delete', [\App\Http\Controllers\AdminController::class, 'adminDelete']);
  Route::post('/admin_change', [\App\Http\Controllers\AdminController::class, 'adminChange']);
  Route::post('/admin_add', [\App\Http\Controllers\AdminController::class, 'adminAdd']);
  Route::get('/order_comfirm', [\App\Http\Controllers\NoteController::class, 'orderConfirm'])->name('order_confirm');
  
  
});

require __DIR__.'/auth.php';
