<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;

//Route::get('/contact', 'PostsController@contact');

//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

//Route::get('admin/posts/example',array('as'=>'admin.home' , function (){
//    $url = route('admin.home');
//
//    return "This url is ". $url;
//}));
//
//
//Route::group(['middleware' => ['web']], function (){
//
//});


//Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostsController');

/*Inserting data*/

//Route::get('/insert', function (){
//
//    DB::insert('insert into posts (title, content) values(?,?)', ['PHP with laravel', 'php php php']);
//
//});

//Route::get('/read', function(){
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
////    return var_dump($results);
//
//    foreach ($results as $post){
//        return $post->title;
//    }
//
//});

//Route::get('/update', function(){
//
//   $updated = DB::update('update posts set title = "Updated Title" where id = ?', [1]);
//
//    return $updated;
//
//});

//Route::get('/delete', function(){
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//    return $deleted;
//});

/*
|--------------------------------
| ELEQUENT ORM
|--------------------------------
*/

//Route::get('/find', function(){
//
//    $posts = Post::all();
//
//    foreach ($posts as $post){
//        return $post->title;
//    }
//
//});

//

//Route::get('/find_where', function(){
//
//    $posts = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();
//    return $posts;
//});

//Route::get('/findmore', function (){
//
//    $posts = Post::findOrFail(1);
//
//    return $posts;
//
////    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//});

/*Elequent Inerting*/
//Route::get('/basicinsert', function (){
//
//    $post = new Post;
//    $post->title = 'New Eloquent Title';
//    $post->content = 'Wow eloquent is beautiful';
//    $post->save();
//
//});
//Route::get('/basicupdate', function (){
//
//    $post = Post::find(4);
//    $post->title = 'New Eloquent ORM Title';
//    $post->content = 'Wow eloquent ORM is beautiful';
//    $post->save();
//
//});

//Route::get('/create', function (){
//
//    Post::create(['title'=>'The create method of laravel', 'content'=> 'I\'m learning a lot about PHP']);
//
//});

//Route::get('/update', function (){
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New PHP Title', 'content'=>'I love laravel']);
//
//});

/*Delete Eloquent*/

//Route::get('/delete', function (){
//
//    $post = Post::find(3);
//    $post->delete();
//
//});

//Route::get('/delete2', function (){
//
//    Post::destroy([2,3]);
//
////    Post::where('is_admin', 0)->destroy([2,3]);
//
//});

/*Soft Delete*/

//Route::get('/softdelete', function (){
//
//    $post = Post::find(1)->delete();
//
//});

//Route::get('/readsoftdelete', function (){
//
////    $post = Post::find(6);
////
////    return $post;
//    $post = Post::withTrashed()->where('is_admin', 0)->get();
//    return $post;
////   $post = Post::onlyTrashed()->where('is_Admin', 0)->get();
////   return $post;
//
//});

//Route::get('/restore', function(){
//
//    Post::withTrashed()->where('is_Admin',0)->restore();
//
//});

//Route::get('/forcedelete', function (){
//
//    Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
//
//});

/*
|=========================================
|ELOQUENT Relationship
|=========================================
*/

// HasOne relation or One to One relationship

//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post->content;
//
//});
//Route::get('/post/{id}/user', function($id){
//
//    return Post::find($id)->user->name;
//
//});

//One to many Relationship

//Route::get('/posts', function(){
//
//    $user = User::find(1);
//
//    foreach($user->posts as $post){
//        echo $post->title."<br>";
//    }
//
//});

//Many to Many Relationship
Route::get('/', function(){



});