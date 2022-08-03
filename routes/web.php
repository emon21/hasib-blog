<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;

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

Auth::routes();

Route::get('/',[WebsiteController::class, 'index']);
Route::get('/blog',[WebsiteController::class, 'blog']);
Route::get('/bloglist/{category_id}',[WebsiteController::class, 'bloglist']);
Route::get('/postdetails/{post_id}',[WebsiteController::class, 'postdetails']);
Route::get('/blogdetails/{blog_id}',[WebsiteController::class, 'blogdetails']);
Route::get('/details/{blog_id}',[WebsiteController::class, 'details']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Add Data

Route::get('/add_data', [App\Http\Controllers\HomeController::class, 'add_data']);
Route::post('/data_process', [App\Http\Controllers\HomeController::class, 'data_process']);
Route::get('/data_show', [App\Http\Controllers\HomeController::class, 'data_show']);
Route::get('delete_data/{delete_id}', [App\Http\Controllers\HomeController::class, 'delete_data']);
Route::get('/edit_data/{std_id}', [App\Http\Controllers\HomeController::class, 'editstd']);

Route::post('/edit_process', [App\Http\Controllers\HomeController::class, 'edit_process']);
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::get('/studentList', [App\Http\Controllers\HomeController::class, 'studentList']);

//Admin Route

                        // =====================   Admin Route List Start  ===============================

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/home', [AdminController::class, 'home'])->name('home');

//About Route Start
Route::get('/admin/aboutlist', [AdminController::class, 'aboutlist']);
Route::get('/admin/about', [AdminController::class, 'about']);
Route::post('/admin/about_process', [AdminController::class, 'about_process']);
Route::get('/admin/about/aboutskill', [AdminController::class, 'aboutskill']);
Route::get('/admin/about/add_skill', [AdminController::class, 'add_skill'])->name('add_skill');
Route::post('/admin/about/skillinsert', [AdminController::class, 'skillinsert']);
Route::get('/admin/about/delete_skill/{skill_id}', [AdminController::class, 'delete_skill']);
Route::get('/admin/about/edit_skill/{skill_id}', [AdminController::class, 'edit_skill']);
Route::post('/admin/about/skillupdate', [AdminController::class, 'skillupdate']);

//About Route End

// Service Route List Start

Route::get('/admin/service/servicelist', [AdminController::class, 'servicelist']);
Route::get('/admin/service/add_service', [AdminController::class, 'add_service']);
Route::post('/admin/service/service_insert', [AdminController::class, 'service_insert']);
Route::get('/admin/service/delete_service/{service_id}', [AdminController::class, 'delete_service']);
Route::get('/admin/service/edit_service/{service_id}', [AdminController::class, 'edit_service']);
Route::post('/admin/service/update_service', [AdminController::class, 'update_service']);

// Service Route List End


// Portfolio Route List Start

Route::get('/admin/portfolio/categorylist', [AdminController::class, 'categorylist']);
Route::get('/admin/portfolio/addcategory', [AdminController::class, 'addcategory']);
Route::post('/admin/portfolio/categoryprocess', [AdminController::class, 'categoryprocess']);
Route::get('/admin/portfolio/delete_category/{category_id}', [AdminController::class, 'delete_category']);
Route::get('/admin/portfolio/edit_category/{category_id}', [AdminController::class, 'edit_category']);
Route::post('/admin/portfolio/updatecategory', [AdminController::class, 'updatecategory']);
Route::get('/admin/portfolio/portfolio', [AdminController::class, 'portfolio']);
Route::get('/admin/portfolio/add_portfolio', [AdminController::class, 'add_portfolio']);
Route::post('/admin/portfolio/portfolioprocess', [AdminController::class, 'portfolioprocess']);
Route::get('/admin/portfolio/delete_portfolio/{portfolio_id}', [AdminController::class, 'delete_portfolio']);
Route::get('/admin/portfolio/edit_portfolio/{portfolio_id}', [AdminController::class, 'edit_portfolio']);
Route::post('/admin/portfolio/updateportfolio', [AdminController::class, 'updateportfolio']);

// Portfolio Route List End

// Tag Route List Start

Route::get('/admin/tag/taglist', [AdminController::class, 'showtag']);
Route::get('/admin/tag/addtag', [AdminController::class, 'addtag']);
Route::post('/admin/tag/taginsert', [AdminController::class, 'taginsert']);
Route::get('/admin/tag/tagedit/{tag_id}', [AdminController::class, 'tagedit']);
Route::post('/admin/tag/updatetag', [AdminController::class, 'updatetag']);
Route::get('/admin/tag/deletetag/{tag_id}', [AdminController::class, 'distroytag']);



// Tag Route List End


// Blog Route List Start

Route::get('/admin/blog/categorylist', [AdminController::class, 'blogcatlist']);
Route::get('/admin/blog/blogcategoryinsert', [AdminController::class, 'blogcategoryinsert']);
Route::post('/admin/blog/blogcategoryprocess', [AdminController::class, 'blogcategoryprocess']);
Route::get('/admin/blog/blogcategoryedit/{blog_cat_id}', [AdminController::class, 'blogcategoryedit']);
Route::post('/admin/blog/blogcategoryupdate', [AdminController::class, 'blogcategoryupdate']);
Route::get('/admin/blog/blogcategorydelete/{blog_cat_id}', [AdminController::class, 'blogcategorydelete']);
Route::get('/admin/blog/bloglist', [AdminController::class, 'bloglist']);
Route::get('/admin/blog/bloginsert', [AdminController::class, 'bloginsert']);
Route::post('/admin/blog/blogprocess', [AdminController::class, 'blogprocess']);
Route::get('/admin/blog/blogedit/{blog_id}', [AdminController::class, 'blogedit']);
Route::post('/admin/blog/blogupdate', [AdminController::class, 'blogupdate']);
Route::get('/admin/blog/blogdelete/{blog_id}', [AdminController::class, 'blogdelete']);

// Blog Route List End

// Menu Route List Start

Route::get('/admin/menu/menulist', [AdminController::class, 'menulist']);
Route::get('/admin/menu/menuinsert', [AdminController::class, 'menuinsert']);
Route::post('/admin/menu/menuprocess', [AdminController::class, 'menuprocess']);
Route::get('/admin/menu/menuedit/{blog_id}', [AdminController::class, 'menuedit']);
Route::post('/admin/menu/menuupdate', [AdminController::class, 'menuupdate']);
Route::get('/admin/menu/menudelete/{blog_id}', [AdminController::class, 'menudelete']);

// Menu Route List End

// Contact Route List Start

Route::get('/admin/contact/contactlist', [AdminController::class, 'contactlist']);

// Contact Route List End

                      // =====================   Admin Route List End   ===============================


// =====================   Frontend Route List   ===============================

// Contact Route List  Start

// Route::get('/', [WebsiteController::class, 'contactlist']);
Route::post('/contactprocess', [WebsiteController::class, 'contactprocess']);


//Relationship Route
Route::get('/animal',[WebsiteController::class,'animal']);
// Contact Route List  End
