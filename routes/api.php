<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api', 'cors']], function() {
    Route::post('auth/login', 'Auth\ApiAuthController@login');

    Route::get('books', 'BookController@index');
    Route::get('book/{isbn}', 'BookController@findByISBN');
    Route::get('book/checkisbn/{isbn}', 'BookController@checkISBN');
    Route::get('books/search/{searchTerm}', 'BookController@findBySearchTerm');



});


// methods with auth
Route::group(['middleware' => ['api', 'cors', 'jwt-auth']], function() {

    // view Orders
    Route::get('orders', 'OrderController@index');
    //get one Order by ID
    Route::get('orders/{id}', 'OrderController@getOrderById');
    //view Orders by each UserID
    Route::get('orders/userId/{userId}', 'OrderController@findByUserId');
    //find by Username
    Route::get('orders/username/{name}', 'OrderController@findByUserName');
    //get orders by state
    Route::get('orders/state/{state}', 'OrderController@findByState');
    //save new order
    Route::post('order', 'OrderController@saveOrder');
    //get Orderlog
    Route::get('order/orderlog/{orderId}', 'OrderController@getOrderlogs');
    //change order
    Route::put('order/{orderid}', 'OrderController@updateOrder');

// update book
    Route::put('book/{isbn}', 'BookController@update');
// delete book
    Route::delete('book/{isbn}', 'BookController@delete');


// insert book
    Route::post('book', 'BookController@save');

    Route::post('auth/logout', 'Auth\ApiAuthController@logout');
    Route::post('auth/user', 'Auth\ApiAuthController@getCurrentAuthenticationUser');

});

