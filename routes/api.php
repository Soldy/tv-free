<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/channels/', 'ChannelController@lists');
Route::get('/channels/{channel-uuid}/programes/{program-uuid}', 'ChannelController@getDetails'); 
Route::get('/channels/{channel-uuid}/{date}/{timezone}', 'ChannelController@schedule'); 

