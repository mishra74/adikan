<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\gallarycontroller;
use App\Http\Controllers\blogController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\courseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){

    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //gallary
    Route::get('/gallarylist', [gallarycontroller::class, 'gallarylist'])->name('gallary.list');
    Route::get('/gallarylist-form', [gallarycontroller::class, 'gallarylist_form'])->name('gallary.form');
    Route::post('/gallarylist-post', [gallarycontroller::class, 'gallarylist_post'])->name('Gallary.store');
    Route::get('/gallarylist-edit/{id}', [gallarycontroller::class, 'gallary_edit'])->name('gallary.edit');
    Route::post('/gallarylist-saveedit/{id}', [gallarycontroller::class, 'gallary_editsave'])->name('gallary.edit.save');
    Route::get('/gallarylist-delete/{id}', [gallarycontroller::class, 'gallarydelete'])->name('gallary.delete');

    //sub Gallary
    Route::get('/subgallarylist/{id}', [gallarycontroller::class, 'subgallarylist'])->name('subgallary.list');
    Route::get('/subgallarylist-form/{id}', [gallarycontroller::class, 'subgallarylist_form'])->name('subgallary.form');
    Route::post('/subgallarylist-post', [gallarycontroller::class, 'subgallarylist_post'])->name('subGallary.store');
    Route::get('/subgallarylist-edit/{id}', [gallarycontroller::class, 'subgallary_edit'])->name('subgallary.edit');
    Route::post('/subgallarylist-saveedit/{id}', [gallarycontroller::class, 'subgallary_editsave'])->name('subgallary.edit.save');
    Route::get('/subgallarylist-delete/{id}', [gallarycontroller::class, 'subgallarydelete'])->name('subgallary.delete');

    //blogs
    //gallary blogs
    Route::get('/blogslist', [blogController::class, 'blogslist'])->name('blogs.list');
    Route::get('/blogslist-form', [blogController::class, 'blogslist_form'])->name('blogs.form');
    Route::post('/blogslist-post', [blogController::class, 'blogslist_post'])->name('blogs.store');
    Route::get('/blogslist-edit/{id}', [blogController::class, 'blogs_edit'])->name('blogs.edit');
    Route::post('/blogslist-saveedit/{id}', [blogController::class, 'blogs_editsave'])->name('blogs.edit.save');
    Route::get('/blogslist-delete/{id}', [blogController::class, 'blogsdelete'])->name('blogs.delete');
    //enquiry
    Route::get('/enquiry', [homeController::class, 'enquirylist'])->name('enquiry.list');
    Route::get('/career', [homeController::class, 'careerlist'])->name('career.list');
    Route::get('/contactus', [homeController::class, 'contactuslist'])->name('contactus.list');
    //course
    Route::get('/courseslist', [courseController::class, 'courselist'])->name('course.list');
    Route::get('/coourse-form', [courseController::class, 'courselist_form'])->name('course.form');
    Route::post('/course-post', [courseController::class, 'course_post'])->name('course.store');
    Route::get('/course-edit/{id}', [courseController::class, 'course_edit'])->name('course.edit');
    Route::post('/course-saveedit/{id}', [courseController::class, 'course_editsave'])->name('course.edit.save');
    Route::get('/course-delete/{id}', [courseController::class, 'coursedelete'])->name('course.delete');
   
});
//frontend
Route::get('enquiry-page',function(){
return  view('fronted.pages.enquiry');
});
Route::get('enquiry-page',function(){
    return  view('fronted.pages.enquiry');
    });
Route::post('enquiry-post',[homeController::class,'enquirypost'])->name('enquiry.post');
Route::post('contact-post',[homeController::class,'contactpost'])->name('contact.post');

Route::get('/fronted',function(){

    return view('frontend.index');
});



require __DIR__.'/auth.php';
