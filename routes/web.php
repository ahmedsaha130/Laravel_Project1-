<?php

use Illuminate\Support\Facades\App;
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

// Route::get('/', function () {
//     return view('welcome');
// });


/* Route Example */
Route::get('/route1', function () {
    echo "Ahmed S0alha";
//Die Done Page
    dd("Weclome To  Palestine");
});


Route::get('/user', 'App\Http\Controllers\Controller@show');

Route::get('/route3/{id?}/{section}', function($id ="unknown" ,$section = "unKonw"){

    dd("Welcome   "  .$id ."  Section =".$section);
});
// redicrect Route Page

Route::get('/old_page',function (){  
    
    // return redirect()->route('new_page',302); name Route
});

Route::get('/new_page',function(){

  dd("Welcome New Page");

})->name("new_page");  // Name Route


Route::redirect("old_page","new_page",301);
Route::redirect("Alaqsa University","https://moodle.alaqsa.edu.ps/course/view.php?id=139");
 Route::view('/','welcome');

 //prefix Route Page
// Route::prefix('/adimn')->group(function(){});
 Route::prefix('/admin')->group(function (){


Route::get('/setting',function (){

    dd("Welcome Admin Setting ");
});

Route::get('/Adding Admin',function (){

    dd("Welcome Admin Adding Admin ");
});
Route::get('/Delete',function (){

    dd("Welcome Admin Delete ");
});

 });

 // Middleware Route Page
 Route::middleware(['ip'])->group(function(){

    Route::get('Route5',function (){
    
        dd("Weclom Middleware");
    });
     });
 Route::middleware(['auth'])->group(function(){

Route::get('Route6',function (){

    dd("Weclom Middleware");
});
 });

Route::middleware('throttle:3,1')->group(function(){


    Route::get('sensetive',function(){

        dd("Sensetive");
});
});
