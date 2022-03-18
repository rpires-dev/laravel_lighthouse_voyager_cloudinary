<?php

use App\Http\Controllers\LandingPageController;
use App\Models\Category;
use App\Models\Post;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use App\Models\User;
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
    return view('index');
});


// Route::get('/', [LandingPageController::class, 'index']);

// TESTS 🧪 GET
Route::get('test', function () {
    
    // $category = Category::find(3);
    // $post= $category->posts()->first();

    $posts= Post::find(5);
    dump($posts->category);

    // return "test";

});
// TESTS 🧪 POST
// Route::post('test', function (Request $request) {

//     // Upload an Image File to Cloudinary with One line of Code
//     $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();
//     dd($uploadedFileUrl);
// })->name('test');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
