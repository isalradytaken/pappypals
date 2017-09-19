<?php
use Illuminate\Http\Request;
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

Route::get('/', [
    'uses' => '\App\Http\Controllers\HomeControllers@home', 
    'as' => 'home', 

]);

Route::get('/alert', function(){
  return redirect()->route('home')->with('info', 'knazz');
});

Route::get('/module', [
    'uses' => '\App\Http\Controllers\HomeControllers@getmodule', 
    'as' => 'module', 
]);
Route::get('/contact', [
    'uses' => '\App\Http\Controllers\HomeControllers@getcontact', 
    'as' => 'contact', 
]);
Route::get('/faq', [
    'uses' => '\App\Http\Controllers\HomeControllers@getfaq', 
    'as' => 'faq', 
]);

Route::get('/playModule', [
    'uses' => '\App\Http\Controllers\HomeControllers@getplayModule', 
    'as' => 'playModule', 
]);
//Route::get('/articles', function () {
//    return redirect('/blog');
//});
//Route::get('/blog', 'BlogController@index');
//Route::get('/blog/{slug}', 'BlogController@showPost');

Route::get('/articles', [
    'uses' => '\App\Http\Controllers\HomeControllers@getarticles', 
    'as' => 'articles', 
]);

Route::get('/activities', [
    'uses' => '\App\Http\Controllers\HomeControllers@getactivities', 
    'as' => 'activities', 
]);

Route::get('/playTogether', [
    'uses' => '\App\Http\Controllers\HomeControllers@getplayTogether', 
    'as' => 'playTogether', 
]);

Route::get('/videos', [
    'uses' => '\App\Http\Controllers\HomeControllers@getvideos', 
    'as' => 'videos', 
]);

Route::get('/EQ', [
    'uses' => '\App\Http\Controllers\HomeControllers@getEQ', 
    'as' => 'EQ', 
]);

Route::get('/signup',[
    'uses' => '\App\Http\Controllers\AuthControllers@getSignup', 
    'as' => 'getsignup',
    'middleware' => ['guest'],    
]);
Route::get('/signin',[
    'uses' => '\App\Http\Controllers\AuthControllers@getSignin', 
    'as' => 'getsignin',
    'middleware' => ['guest'], 
]);


Route::post('/signup',[
    'uses' => '\App\Http\Controllers\AuthControllers@postSignup', 
    'as' => 'postsignup', 
    'middleware' => ['guest'], 
]);
Route::post('/signin',[
    'uses' => '\App\Http\Controllers\AuthControllers@postSignin', 
    'as' => 'postsignin',
    'middleware' => ['guest'],  
]);

Route::get('/signout',[
    'uses' => '\App\Http\Controllers\AuthControllers@postSignOut', 
    'as' => 'Auth.signout',  
    
]);

Route::post('/create-account',[
    'uses' => '\App\Http\Controllers\AuthControllers@postcreateAccount', 
    'as' => 'postcreateAccount',  
   // 'middleware' => ['guest'], 
]);

Route::get('/create-account',[
    'uses' => '\App\Http\Controllers\AuthControllers@getcreateAccount', 
    'as' => 'Auth.create-account',  
   // 'middleware' => ['guest'], 
]);

Route::get('/my-accounts',[
    'uses' => '\App\Http\Controllers\My_AccountControllers@getMy_Accounts', 
    'as' => 'Account.create-account',  
   // 'middleware' => ['guest'], 
]);


/******
*
* PATMENT  
*
******************************/ 
Route::group(['prefix' => 'account'], function()
{
    Route::get('/',['uses' => '\App\Http\Controllers\PaymentControllers@getAccounts', 'as' => 'subscription',  ]);
    Route::post('/',['uses' => '\App\Http\Controllers\PaymentControllers@postjoin',]);
});

Route::group(['prefix' => 'profile'], function()
{
    Route::get('/',['uses' => '\App\Http\Controllers\PaymentControllers@getprofile', 'as' => 'profileSubscription', ]);
    Route::post('/',['uses' => '\App\Http\Controllers\PaymentControllers@postjoin', ]);

});

Route::group(['prefix' => 'ChangePassword'], function()
{

    Route::get('/',[
        'uses' => '\App\Http\Controllers\AuthControllers@getPassword', 
        'as' => 'subscription',  
        //'middleware' => ['guest'], 
    ]);

    Route::post('/',[
        'uses' => '\App\Http\Controllers\AuthControllers@postPassword', 
        //'middleware' => ['guest'], 
    ]);
});
Route::group(['prefix' => 'SecurityCheck'], function()
{

    Route::get('/',[
        'uses' => '\App\Http\Controllers\AuthControllers@getSecurtyCheck', 
        'as' => 'subscription',  
        //'middleware' => ['guest'], 
    ]);

    Route::post('/',[
        'uses' => '\App\Http\Controllers\AuthControllers@postSecurtyCheck', 
        //'middleware' => ['guest'], 
    ]);
});
Route::get('/cancel',['uses' => '\App\Http\Controllers\PaymentControllers@canceljoin', 'as' => 'cancel', ]);
Route::get('/upgrade',['uses' => '\App\Http\Controllers\PaymentControllers@upgrade', 'as' => 'upgrade', ]);


// Star fixing MVC structure 
Route::resource('subusers', 'SubUserController');
Route::post('subusers/update','SubUserController@update');
Route::post('subusers/create','SubUserController@store');
Route::post('/subusers/{Id}/','SubUserController@destroy');
Route::get('/subusers/{Id}/delete', 'SubUserController@delete');
Route::post('subusers/select','SubUserController@select');
Route::get('/Activity', 'LogsController@index');

Route::resource('dashboard', 'DashBoardController');


Route::post('order-post', ['as'=>'order-post','uses'=>'PaymentControllers@postjoin']);

Route::get('user/invoice/{invoice}', function (Request $request, $invoiceId) {
    return $request->user()->downloadInvoice($invoiceId, [
        'vendor'  => 'Pappy Pals',
        'product' => 'Pappy Pals Subscription',
    ]);
});

//password recovery
Route::controllers([
   'password' => 'PasswordController'
]);
Route::get('/ForgotPassword', 'PasswordController@request');


//session controller
Route::post('/session','SessionController@updateSession');

