<?php

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

use App\Task;

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/', function () {
    return view('welcome',[
        'name' => 'Soos'
        ]);
});

Route::get('pictures', function () {

    $tasks = DB::table('tasks')->get();

    return view('pictures', compact('tasks'));
});

//new tutorial Post
Route::get('/', 'Postscontroller@index');

Route::get('/posts/create', 'Postscontroller@create');

//Route::get('posts/{post}', 'Postscontroller@show');

//new tutorial blogs
/*Route::get('/', 'Blogscontroller@index');

Route::get('blogs/{blog}', 'Blogscontroller@example');*/