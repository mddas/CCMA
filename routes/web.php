<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstituteDetailsController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SuccessStudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CommonPageController;
use App\Http\Controllers\GalaryPageController;
use App\Http\Controllers\VideoPageController;
use App\Http\Controllers\NoticePageController;
use App\Http\Controllers\MessageFromController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlidderController;
use App\Http\Controllers\MessageController;//this is contact us where user send message
use App\Http\Controllers\BannerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//<----------------------------------------Admin panel------------------------------->
Route::get('/admin',[AdminController::class,'index']);

//**************Institute controller****************/
Route::get('/admin/institute/details',[InstituteDetailsController::class,'index'])->name('InstituteDetails');
Route::get('/admin/institute/add-details',[InstituteDetailsController::class,'add'])->name('AddInstituteDetails');
Route::post('/admin/institute/store-details',[InstituteDetailsController::class,'store'])->name('StoreInstituteDetails');
Route::get('/admin/institute/delete-details/{id}',[InstituteDetailsController::class,'delete'])->name('DeleteInstituteDetails');
Route::get('/admin/institute/edit-details/{id}',[InstituteDetailsController::class,'edit'])->name('EditInstituteDetails');
Route::get('/admin/institute/view-details/{id}',[InstituteDetailsController::class,'view'])->name('ViewInstituteDetails');


Route::get('/admin/institute/links',[LinksController::class,'index'])->name('links');
Route::get('/admin/institute/seo',[SeoController::class,'index'])->name('seo');

//********************StudentController*******************************/
Route::get('/admin/student/view',[StudentController::class,'index'])->name('StudentRead');
Route::get('/admin/student/add-form',[StudentController::class,'addForm'])->name('StudentAddForm');
Route::POST('/admin/student/store',[StudentController::class,'store'])->name('StudentStore');
Route::get('/admin/student/edit/{id}',[StudentController::class,'edit'])->name('StudentEdit');
Route::get('/admin/student/delete/{id}',[StudentController::class,'delete'])->name('StudentDelete');

//********************SuccessStudentController*******************************/
Route::get('/admin/student-success/view',[SuccessStudentController::class,'index'])->name('StudentSuccessRead');
Route::get('/admin/student-success/add-form',[SuccessStudentController::class,'addForm'])->name('StudentSuccessAddForm');
Route::POST('/admin/student-success/store',[SuccessStudentController::class,'store'])->name('StudentSuccessStore');
Route::get('/admin/student-success/edit/{id}',[SuccessStudentController::class,'edit'])->name('StudentSuccessEdit');
Route::get('/admin/student-success/delete/{id}',[SuccessStudentController::class,'delete'])->name('StudentSuccessDelete');
//********************StaffController*******************************/

Route::get('/admin/staff/view',[StaffController::class,'index'])->name('StaffRead');
Route::get('/admin/staff/add-form',[StaffController::class,'addForm'])->name('StaffAddForm');
Route::POST('/admin/staff/store',[StaffController::class,'store'])->name('StaffStore');
Route::get('/admin/staff/edit/{id}',[StaffController::class,'edit'])->name('StaffEdit');
Route::get('/admin/staff/delete/{id}',[StaffController::class,'delete'])->name('StaffDelete');

//*************CategoryController*******************/
Route::get('/admin/menu',[CategoryController::class,'index'])->name('categoryread');
Route::post('/admin/add-menu',[CategoryController::class,'store'])->name('categoryadd');
Route::get('/admin/menu/edit/{slug}',[CategoryController::class,'edit'])->name('categoryedit');
Route::get('/admin/menu/delete/{slug}',[CategoryController::class,'delete'])->name('categorydelete');
Route::get('/admin/menu/view/{slug}',[CategoryController::class,'view'])->name('categoryview');


//***********SubCategoryController*******************************************/
Route::get('/admin/submenu',[SubcategoryController::class,'index'])->name('subcategoryread');
Route::post('/admin/add-submenu',[SubcategoryController::class,'store'])->name('subcategoryadd');
Route::get('/admin/submenu/edit/{slug}',[SubcategoryController::class,'edit'])->name('subcategoryedit');
Route::get('/admin/submenu/view/{slug}',[SubcategoryController::class,'view'])->name('subcategoryview');
Route::get('/admin/submenu/delete/{slug}',[SubcategoryController::class,'delete'])->name('subcategorydelete');

//**************************Page Type*************************************** */
         //*******************CommanPageController**********************/
Route::get('/admin/page_type/common_page/view',[CommonPageController::class,'index'])->name('CommonPageRead');
Route::get('/admin/page_type/common_page/add-form',[CommonPageController::class,'addform'])->name('CommonPageAddForm');
Route::POST('/admin/page_type/common_page/store',[CommonPageController::class,'store'])->name('CommonPageStore');
Route::get('/admin/page_type/common_page/edit/{id}',[CommonPageController::class,'edit'])->name('CommonPageEdit');
Route::get('/admin/page_type/common_page/delete/{id}',[CommonPageController::class,'delete'])->name('CommonPageDelete');
        //*******************VideoPageController**********************/
Route::get('/admin/page_type/video_page/view',[VideoPageController::class,'index'])->name('VideoPageRead');
Route::get('/admin/page_type/video_page/add-form',[VideoPageController::class,'addform'])->name('VideoPageAddForm');
Route::POST('/admin/page_type/video_page/store',[VideoPageController::class,'store'])->name('VideoPageStore');
Route::get('/admin/page_type/video_page/edit/{id}',[VideoPageController::class,'edit'])->name('VideoPageEdit');
Route::get('/admin/page_type/video_page/delete/{id}',[VideoPageController::class,'delete'])->name('VideoPageDelete');
        //*******************GallaryPageController**********************/
Route::get('/admin/page_type/galary_page/view',[GalaryPageController::class,'index'])->name('GalaryPageRead');
Route::get('/admin/page_type/galary_page/add-form',[GalaryPageController::class,'addForm'])->name('GalaryPageAddForm');
Route::POST('/admin/page_type/galary_page/store',[GalaryPageController::class,'store'])->name('GalaryPageStore');
Route::get('/admin/page_type/galary_page/edit/{id}',[GalaryPageController::class,'edit'])->name('GalaryPageEdit');
Route::get('/admin/page_type/galary_page/delete/{id}',[GalaryPageController::class,'delete'])->name('GalaryPageDelete');
        //*******************NoticePageController**********************/
Route::get('/admin/page_type/notice_page/view',[NoticePageController::class,'index'])->name('NoticePageRead');
Route::get('/admin/page_type/notice_page/add-form',[NoticePageController::class,'addForm'])->name('NoticePageAddForm');
Route::POST('/admin/page_type/notice_page/store',[NoticePageController::class,'store'])->name('NoticePageStore');
Route::get('/admin/page_type/notice_page/edit/{id}',[NoticePageController::class,'edit'])->name('NoticePageEdit');
Route::get('/admin/page_type/notice_page/delete/{id}',[NoticePageController::class,'delete'])->name('NoticePageDelete');
        //********************MessageFromController*********************/
Route::get('/admin/messagefrom/view',[MessageFromController::class,'index'])->name('MessageRead');
Route::get('/admin/messagefrom/add-form',[MessageFromController::class,'addForm'])->name('MessageAddForm');
Route::POST('/admin/messagefrom/store',[MessageFromController::class,'store'])->name('MessageStore');
Route::get('/admin/messagefrom/edit/{id}',[MessageFromController::class,'edit'])->name('MessageEdit');
Route::get('/admin/messagefrom/delete/{id}',[MessageFromController::class,'delete'])->name('MessageDelete');

//*******************Message(contact us)****************************/
Route::get('/contact',[MessageController::class,'contact'])->name('ContactUs');
Route::get('/admin/contact/view',[MessageController::class,'index'])->name('ContactRead');
// Route::get('/admin/seo/add-form',[SeoController::class,'addForm'])->name('SeoAddForm');
Route::POST('/admin/contact/store',[MessageController::class,'store'])->name('ContactStore');
Route::get('/admin/contact/edit/{id}',[MessageController::class,'edit'])->name('ContactEdit');
Route::get('/admin/contact/delete/{id}',[MessageController::class,'delete'])->name('ContactDelete');
       //********************HOMECONTROLLER*******************************/
       
Route::get('',[HomeController::class,'index'])->name('home');
Route::get('/{menu}',[HomeController::class,'menu'])->name('menu');
Route::get('{menu}/{submenu}',[HomeController::class,'submenu'])->name('submenu');

//********************SlidderController*******************************/
Route::get('/admin/slidder/view',[SlidderController::class,'index'])->name('SlidderRead');
Route::get('/admin/slidder/add-form',[SlidderController::class,'addForm'])->name('SlidderAddForm');
Route::POST('/admin/slidder/store',[SlidderController::class,'store'])->name('SlidderStore');
Route::get('/admin/slidder/edit/{id}',[SlidderController::class,'edit'])->name('SlidderEdit');
Route::get('/admin/slidder/delete/{id}',[SlidderController::class,'delete'])->name('SlidderDelete');
//********************BannerController*******************************/
Route::get('/admin/banner/view',[BannerController::class,'index'])->name('BannerRead');
Route::get('/admin/banner/add-form',[BannerController::class,'addForm'])->name('BannerAddForm');
Route::POST('/admin/banner/store',[BannerController::class,'store'])->name('BannerStore');
Route::get('/admin/banner/edit/{id}',[BannerController::class,'edit'])->name('BannerEdit');
Route::get('/admin/banner/delete/{id}',[BannerController::class,'delete'])->name('BannerDelete');
//********************SeoController*******************************/
Route::get('/admin/seo/view',[SeoController::class,'index'])->name('SeoRead');
Route::get('/admin/seo/add-form',[SeoController::class,'addForm'])->name('SeoAddForm');
Route::POST('/admin/seo/store',[SeoController::class,'store'])->name('SeoStore');
Route::get('/admin/seo/edit/{id}',[SeoController::class,'edit'])->name('SeoEdit');
Route::get('/admin/seo/delete/{id}',[SeoController::class,'delete'])->name('SeoDelete');



