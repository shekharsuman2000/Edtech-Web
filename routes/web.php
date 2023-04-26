<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\courseregistration;
use App\Http\Controllers\login;
use App\Http\Controllers\course_explorer;
use App\Http\Controllers\Dashboard_main;
use App\Http\Controllers\Aboutus;
use App\Http\Controllers\Contactus;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Upload_course;
use App\Http\Controllers\Coursedescription;
use App\Http\Controllers\CourseDisplay;
use App\Http\Controllers\CourseEnrollment;

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
Route::get('/',[home::class, 'home'])->name('home');

Route::get('/header1',[home::class, 'header1']);
Route::get('/login',[login::class, 'login'])->name('user.login');
Route::get('/register',[courseregistration::class, 'reg']);
Route::post('/coursereg', [courseregistration::class, 'courseregister']);
Route::get('/courseexplorer',[course_explorer::class, 'course_explorer'])->name('courseexplorer');
Route::get('/dashboard', [Dashboard_main::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/aboutus', [Aboutus::class, 'index'])->name('aboutus');

Route::post('/login', [login::class, 'auth'])->name('login');
Route::get('/logout',[login::class, 'logout']);
Route::get('/contactus', [Contactus::class, 'contact'])->name('contactus');
Route::post('/sendmessage', [Contactus::class, 'displaymessage']);
Route::get('/displaymessages', [Contactus::class, 'display'])->name('displaymessages');
Route::get('/admin', [AdminController::class, 'admin_view'])->name('admin_view');
Route::get('/upload', [Upload_course::class, 'upload'])->name('upload');
Route::post('/addcourse', [Upload_course::class, 'create']);
Route::get('/course_description', [Coursedescription::class, 'description']);
Route::get('/coursedetails/{courseid}', [CourseDisplay::class, 'show' ])->name('coursedetails');
Route::get('/displaycourses', [Upload_course::class, 'display'])->name('displaycourses');
Route::get('/enrolled', [CourseDisplay::class, 'enrolledCourse' ])->name('enrolledCourse');


//Route::post('/courses/{course}/enroll', [CourseEnrollment::class, 'store'])->name('courses.enroll');
//Route::delete('/courses/{course}/enroll', [CourseEnrollment::class, 'destroy'])->name('courses.unenroll');


//Route::get('/dashboard', [Dashboard_main::class, 'index'])->name('dashboard')->middleware('auth');

//Route::get('/courses', [CourseDisplay::class, 'index'])->name('courses.index');
//Route::get('/courses/{id}', [CourseDisplay::class, 'show'])->name('courses.show');
//Route::post('/courses/{id}/enroll', [CourseDisplay::class, 'enroll'])->name('courses.enroll');
Route::post('/courses/{course}/enroll', [CourseDisplay::class, 'enroll'])->name('courses.enroll');

Route::get('/adminregister', [AdminController::class, 'admin_registration'])->name('admin.registration');
Route::post('/adminreg', [AdminController::class, 'admin_registration_'])->name('admin.register');
Route::post('/adminlogin', [AdminController::class, 'admin_login_'])->name('admin.login');
Route::get('/adminlogout',[AdminController::class, 'admin_logout']);
Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
Route::get('/students', [AdminController::class, 'display'])->name('students');
Route::delete('/courses/{id}', [AdminController::class, 'destroy'])->name('courses.destroy');
Route::delete('/users/{id}', [AdminController::class, 'userdestroy'])->name('users.destroy');
Route::get('/courses/{id}/edit', [AdminController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [AdminController::class, 'update'])->name('courses.update');
Route::get('/Student_dashboard/{id}', [AdminController::class, 'student_dashboard' ])->name('student.dashboard');

Route::get('/users/{id}/edit', [AdminController::class, 'edit_student'])->name('admin.edit.student');
Route::put('/edit/student/{id}', [AdminController::class, 'student_update'])->name('student.update');