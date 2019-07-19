<?php
use App\Notifications\SubscriptionRenewalFailed;
use App\User;
use Illuminate\Http\Request;
  
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

Route::get('/', function(){
    return view('welcome');
});


Route::get('/projects/create', function(Request $request){

    // $request->session()->put('foobar', 'bazz');
    // return $request->session()->get('foobar');  
    // $request->flash();
    
    // set user to session
    //session(['name'=>"JohnDoe"]);


    //get user from session
    // return session('name');

    return view('projects.create');
});

Route::post('/projects', function(Request $request){
    //validate
    //save project

    flash('your message have been created');
    return redirect('/');
    // return redirect('/')->with('message','your project has been created');
});


