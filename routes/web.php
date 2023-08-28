 <?php
 
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleUserController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;


use App\Http\Controllers\Website\WebsiteController;


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
//  frontend 
// Route::get('/', function () {
//     return view('website');
// });

// blog pages
Route::get('/',[WebsiteController::class,'index'])->name('/');
Route::get('/post/view/{slug}',[WebsiteController::class,'view']);
Route::get('/post/category/{slug}',[WebsiteController::class,'category']);

// LOGout 
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// BACKEND Site
Route::get('/dashboard',[AdminController::class,'index']);

// User controller 
Route::get('/dashboard/user',[UserController::class,'index']);
Route::get('/dashboard/user/add',[UserController::class,'add']);
Route::get('/dashboard/user/view/{slug}',[UserController::class,'view']);
Route::get('/dashboard/user/edit/{slug}',[UserController::class,'edit']);
Route::post('/dashboard/user/insert',[UserController::class,'insert']);
Route::post('/dashboard/user/update',[UserController::class,'update']);
Route::post('/dashboard/user/softdel',[UserController::class,'softdelete']);
Route::get('/dashboard/user/restore',[UserController::class,'restore']);
Route::get('/dashboard/user/delete',[UserController::class,'delete']);
Route::get('/dashboard/user/pdf',[UserController::class,'pdf']);
Route::get('/dashboard/user/excel',[UserController::class,'excel']);
// RoleUserController
Route::get('/dashboard/user/role',[RoleUserController::class,'index']);
Route::get('/dashboard/user/role/add',[RoleUserController::class,'add']);
Route::get('/dashboard/user/role/view',[RoleUserController::class,'view']);
Route::post('/dashboard/user/role/insert',[RoleUserController::class,'insert']);
Route::post('/dashboard/user/role/update',[RoleUserController::class,'update']);
Route::post('/dashboard/user/role/softdel',[RoleUserController::class,'softdelete']);
Route::post('/dashboard/user/role/restore',[RoleUserController::class,'restore']);
Route::post('/dashboard/user/role/delete',[RoleUserController::class,'delete']);

// post category controller
Route::get('/dashboard/blog/category',[CategoryPostController::class,'index']);
Route::get('/dashboard/blog/category/add',[CategoryPostController::class,'add']);
Route::get('/dashboard/blog/category/view/{slug}',[CategoryPostController::class,'view']);
Route::get('/dashboard/blog/category/edit/{slug}',[CategoryPostController::class,'edit']);
Route::post('/dashboard/blog/category/insert',[CategoryPostController::class,'insert']);
Route::post('/dashboard/blog/category/update',[CategoryPostController::class,'update']);
Route::post('/dashboard/blog/category/softdel',[CategoryPostController::class,'softdelete'])->name('dashboard.blog.category.softdelete');
Route::get('/dashboard/blog/category/restore',[CategoryPostController::class,'restore']);
Route::get('/dashboard/blog/category/delete',[CategoryPostController::class,'delete']);

// Tag 
Route::get('/dashboard/blog/tag',[TagController::class,'index']);
Route::get('/dashboard/blog/tag/add',[TagController::class,'add']);
Route::get('/dashboard/blog/tag/view/{slug}',[TagController::class,'view']);
Route::get('/dashboard/blog/tag/edit/{slug}',[TagController::class,'edit']);
Route::post('/dashboard/blog/tag/insert',[TagController::class,'insert']);
Route::post('/dashboard/blog/tag/update',[TagController::class,'update']);
Route::post('/dashboard/blog/tag/softdel',[TagController::class,'softdelete']);
Route::get('/dashboard/blog/tag/restore',[TagController::class,'restore']);
Route::post('/dashboard/blog/tag/delete/{id}',[TagController::class,'delete']);

// Blog Post Router

Route::get('/dashboard/blog/post',[PostController::class,'index']);
Route::get('/dashboard/blog/post/add',[PostController::class,'add']);
Route::get('/dashboard/blog/post/view/{slug}',[PostController::class,'view']);
Route::get('/dashboard/blog/post/edit/{slug}',[PostController::class,'edit']);
Route::post('/dashboard/blog/post/insert',[PostController::class,'insert']);
Route::post('/dashboard/blog/post/update',[PostController::class,'update']);
Route::post('/dashboard/blog/post/softdel',[PostController::class,'softdelete']);
Route::get('/dashboard/blog/post/restore',[PostController::class,'restore']);
Route::post('/dashboard/blog/post/delete/{slug}',[PostController::class,'delete']);

require __DIR__.'/auth.php';
