<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('main');});

//--------------------------------------------Our Services routes--------------------------------------------------------
Route::get('/ourservices', function () { return view('our_services');});
Route::get('/service_home_removals', function () { return view('service/home_removals');});
Route::get('/service_office_removals', function () { return view('service/office_removals');});
Route::get('/service_waste_removals', function () { return view('service/waste_removals');});
Route::get('/service_eBay_deliveries', function () { return view('service/eBay_deliveries');});
Route::get('/service_man&van', function () { return view('service/man&van');});
Route::get('/service_furniture&appliance', function () { return view('service/furniture&appliance');});
Route::get('/service_motorbikes', function () { return view('service/motorbikes');});
Route::get('/service_european_moves', function () { return view('service/european_moves');});
Route::get('/service_storage', function () { return view('service/storage');});


//--------------------------------------------Our Books routes--------------------------------------------------------
Route::get('/furnitureappliance_manvan_eBaydeliveries/book1', function () { return view('book/furniture & appliance and man & van and eBay deliveries/book1');});
Route::get('/furnitureappliance_manvan_eBaydeliveries/book2', function () { return view('book/furniture & appliance and man & van and eBay deliveries/book2');});
Route::get('/furnitureappliance_manvan_eBaydeliveries/book3', function () { return view('book/furniture & appliance and man & van and eBay deliveries/book3');});
Route::get('/homeremovals/book1', function () { return view('book/home removals/book1');});
Route::get('/homeremovals/book2', function () { return view('book/home removals/book2');});
Route::get('/homeremovals/book3', function () { return view('book/home removals/book3');});
Route::get('/motorbikes/book1', function () { return view('book/motorbikes/book1');});
Route::get('/officeremovals/book1', function () { return view('book/office removals/book1');});
Route::get('/wasteremovals_europeanmoves_storage/book1', function () { return view('book/waste removals and european moves and storage/book1');});

//--------------------------------------------authentication routes--------------------------------------------------------
Route::get('/login', function () { return view('authentication/login');});
Route::get('/register', function () { return view('authentication/register');});
Route::get('/forgot_password', function () { return view('authentication/forgot_password');});

//--------------------------------------------About Us routes--------------------------------------------------------
Route::get('/aboutus', function () { return view('about_us');});

//--------------------------------------------Contact Us routes--------------------------------------------------------
Route::get('/contactus', function () { return view('contact_us');});