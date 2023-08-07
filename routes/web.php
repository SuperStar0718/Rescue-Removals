<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\eBayDeliveries;
use App\Http\Controllers\Furniture_Appliance;
use App\Http\Controllers\ManVan;
use App\Http\Controllers\OfficeRemovals;
use App\Http\Controllers\HomeRemovals;
use App\Http\Controllers\Motorbike;
use App\Http\Controllers\AdminPanel;
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

Route::get('/', function () { return view('main');})->name('main');


//--------------------------------------------authentication routes--------------------------------------------------------
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/forgot_password', function () { return view('authentication/forgot_password');});


Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

//--------------------------------------------Our Services routes--------------------------------------------------------
// Route::group(['middleware'=>['auth']], function(){

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
// });


Route::group(['prefix'=> 'admin_panel', 'middleware'=>['role']], function(){
    Route::get('/', [AdminPanel::class, 'index'])->name('admin_panel');
    Route::get('completed', [AdminPanel::class, 'completed'])->name('completed');
    Route::get('upcoming', [AdminPanel::class, 'upcoming'])->name('upcoming');
    Route::get('uncompleted', [AdminPanel::class, 'uncompleted'])->name('uncompleted');
    Route::get('settings', [AdminPanel::class, 'settings'])->name('settings');
    Route::get('chat', [AdminPanel::class, 'chat'])->name('chat');
});

//--------------------------------------------Our Books routes--------------------------------------------------------
// Route::get('/furnitureappliance_manvan_eBaydeliveries/book1', [eBayDeliveries::class, 'index'])->name('cart');
// Route::get('/furnitureappliance_manvan_eBaydeliveries/book2', [eBayDeliveries::class, 'hours_need'])->name('hours_need');
// Route::get('/furnitureappliance_manvan_eBaydeliveries/book3', [eBayDeliveries::class, 'men'])->name('men');
// Route::get('/furnitureappliance_manvan_eBaydeliveries/book4', [eBayDeliveries::class, 'select_car'])->name('select_car');
Route::group(['prefix'=>'eBaydelivery'], function (){

    Route::get('select-items', [eBayDeliveries::class, 'index'])->name('eBay');
    Route::get('timer', [eBayDeliveries::class, 'hours_need'])->name('eBay.hours_need');
    Route::get('chooseman', [eBayDeliveries::class, 'men'])->name('eBay.men');
    Route::get('choose-van', [eBayDeliveries::class, 'select_car'])->name('eBay.select_car');
    Route::get('number_of_strucks', [eBayDeliveries::class, 'number_of_car'])->name('eBay.number_of_car');
    Route::get('add_stairs', [eBayDeliveries::class, 'stairs'])->name('eBay.stairs');
    Route::get('congestion-confirmation', [eBayDeliveries::class, 'congestion'])->name('eBay.congestion');
    Route::get('pick_date', [eBayDeliveries::class, 'pick_date'])->name('eBay.pick_date');
    Route::get('arrange_time', [eBayDeliveries::class, 'arrange_time'])->name('eBay.arrange_time');
    Route::get('final_calculation', [eBayDeliveries::class, 'final_calculation'])->name('eBay.final_calculation');
    Route::get('price_page', [eBayDeliveries::class, 'price_page'])->name('eBay.price_page');
    Route::get('billing', [eBayDeliveries::class, 'billing'])->name('eBay.billing');
    Route::post('get_email', [eBayDeliveries::class, 'get_email'])->name('eBay.get_email');

    
    Route::post('update_cart', [eBayDeliveries::class, 'update_cart'])->name('eBay.cart.update.cart');
    Route::post('update_time', [eBayDeliveries::class, 'update_time'])->name('eBay.cart.update.time');
    Route::post('update_car', [eBayDeliveries::class, 'update_car'])->name('eBay.cart.update.car');
    Route::post('update_men', [eBayDeliveries::class, 'update_men'])->name('eBay.cart.update.men');
    Route::post('update_number_of_car', [eBayDeliveries::class, 'update_number_of_car'])->name('eBay.cart.update.number_of_car');
    Route::post('update_pick_date', [eBayDeliveries::class, 'update_pick_date'])->name('eBay.cart.update.pick_date');
    Route::post('update_arrange_hour', [eBayDeliveries::class, 'update_arrange_hour'])->name('eBay.cart.update.arrange_hour');
    Route::post('update_congestion', [eBayDeliveries::class, 'update_congestion'])->name('eBay.cart.update.congestion');
    Route::post('update_position', [eBayDeliveries::class, 'update_position'])->name('eBay.cart.update.position');
    Route::post('update_stair', [eBayDeliveries::class, 'update_stair'])->name('eBay.cart.update.stair');
});






Route::group(['prefix'=>'Furniture_Appliance'], function (){

    Route::get('select-items', [Furniture_Appliance::class, 'index'])->name('Furniture_Appliance');
    Route::get('timer', [Furniture_Appliance::class, 'hours_need'])->name('Furniture_Appliance.hours_need');
    Route::get('chooseman', [Furniture_Appliance::class, 'men'])->name('Furniture_Appliance.men');
    Route::get('choose-van', [Furniture_Appliance::class, 'select_car'])->name('Furniture_Appliance.select_car');
    Route::get('number_of_strucks', [Furniture_Appliance::class, 'number_of_car'])->name('Furniture_Appliance.number_of_car');
    Route::get('add_stairs', [Furniture_Appliance::class, 'stairs'])->name('Furniture_Appliance.stairs');
    Route::get('congestion-confirmation', [Furniture_Appliance::class, 'congestion'])->name('Furniture_Appliance.congestion');
    Route::get('pick_date', [Furniture_Appliance::class, 'pick_date'])->name('Furniture_Appliance.pick_date');
    Route::get('arrange_time', [Furniture_Appliance::class, 'arrange_time'])->name('Furniture_Appliance.arrange_time');
    Route::get('final_calculation', [Furniture_Appliance::class, 'final_calculation'])->name('Furniture_Appliance.final_calculation');
    Route::get('price_page', [Furniture_Appliance::class, 'price_page'])->name('Furniture_Appliance.price_page');
    Route::get('billing', [Furniture_Appliance::class, 'billing'])->name('Furniture_Appliance.billing');
    Route::post('get_email', [Furniture_Appliance::class, 'get_email'])->name('Furniture_Appliance.get_email');


    Route::post('update_cart', [Furniture_Appliance::class, 'update_cart'])->name('Furniture_Appliance.cart.update.cart');
    Route::post('update_time', [Furniture_Appliance::class, 'update_time'])->name('Furniture_Appliance.cart.update.time');
    Route::post('update_car', [Furniture_Appliance::class, 'update_car'])->name('Furniture_Appliance.cart.update.car');
    Route::post('update_men', [Furniture_Appliance::class, 'update_men'])->name('Furniture_Appliance.cart.update.men');
    Route::post('update_number_of_car', [Furniture_Appliance::class, 'update_number_of_car'])->name('Furniture_Appliance.cart.update.number_of_car');
    Route::post('update_pick_date', [Furniture_Appliance::class, 'update_pick_date'])->name('Furniture_Appliance.cart.update.pick_date');
    Route::post('update_arrange_hour', [Furniture_Appliance::class, 'update_arrange_hour'])->name('Furniture_Appliance.cart.update.arrange_hour');
    Route::post('update_congestion', [Furniture_Appliance::class, 'update_congestion'])->name('Furniture_Appliance.cart.update.congestion');
    Route::post('update_position', [Furniture_Appliance::class, 'update_position'])->name('Furniture_Appliance.cart.update.position');
    Route::post('update_stair', [Furniture_Appliance::class, 'update_stair'])->name('Furniture_Appliance.cart.update.stair');
});






Route::group(['prefix'=>'ManVan'], function (){

    Route::get('select-items', [ManVan::class, 'index'])->name('ManVan');
    Route::get('timer', [ManVan::class, 'hours_need'])->name('ManVan.hours_need');
    Route::get('chooseman', [ManVan::class, 'men'])->name('ManVan.men');
    Route::get('choose-van', [ManVan::class, 'select_car'])->name('ManVan.select_car');
    Route::get('number_of_strucks', [ManVan::class, 'number_of_car'])->name('ManVan.number_of_car');
    Route::get('add_stairs', [ManVan::class, 'stairs'])->name('ManVan.stairs');
    Route::get('congestion-confirmation', [ManVan::class, 'congestion'])->name('ManVan.congestion');
    Route::get('pick_date', [ManVan::class, 'pick_date'])->name('ManVan.pick_date');
    Route::get('arrange_time', [ManVan::class, 'arrange_time'])->name('ManVan.arrange_time');
    Route::get('final_calculation', [ManVan::class, 'final_calculation'])->name('ManVan.final_calculation');
    Route::get('price_page', [ManVan::class, 'price_page'])->name('ManVan.price_page');
    Route::get('billing', [ManVan::class, 'billing'])->name('ManVan.billing');
    Route::post('get_email', [ManVan::class, 'get_email'])->name('ManVan.get_email');


    Route::post('update_cart', [ManVan::class, 'update_cart'])->name('ManVan.cart.update.cart');
    Route::post('update_time', [ManVan::class, 'update_time'])->name('ManVan.cart.update.time');
    Route::post('update_car', [ManVan::class, 'update_car'])->name('ManVan.cart.update.car');
    Route::post('update_men', [ManVan::class, 'update_men'])->name('ManVan.cart.update.men');
    Route::post('update_number_of_car', [ManVan::class, 'update_number_of_car'])->name('ManVan.cart.update.number_of_car');
    Route::post('update_pick_date', [ManVan::class, 'update_pick_date'])->name('ManVan.cart.update.pick_date');
    Route::post('update_arrange_hour', [ManVan::class, 'update_arrange_hour'])->name('ManVan.cart.update.arrange_hour');
    Route::post('update_congestion', [ManVan::class, 'update_congestion'])->name('ManVan.cart.update.congestion');
    Route::post('update_position', [ManVan::class, 'update_position'])->name('ManVan.cart.update.position');
    Route::post('update_stair', [ManVan::class, 'update_stair'])->name('ManVan.cart.update.stair');
});






Route::group(['prefix'=>'OfficeRemoval'], function (){

    // Route::get('/OfficeRemoval/select-items', [OfficeRemovals::class, 'index'])->name('OfficeRemovals');
    Route::get('timer', [OfficeRemovals::class, 'hours_need'])->name('OfficeRemovals.hours_need');
    Route::get('chooseman', [OfficeRemovals::class, 'men'])->name('OfficeRemovals.men');
    Route::get('choose-van', [OfficeRemovals::class, 'select_car'])->name('OfficeRemovals.select_car');
    Route::get('number_of_strucks', [OfficeRemovals::class, 'number_of_car'])->name('OfficeRemovals.number_of_car');
    Route::get('add_stairs', [OfficeRemovals::class, 'stairs'])->name('OfficeRemovals.stairs');
    Route::get('congestion-confirmation', [OfficeRemovals::class, 'congestion'])->name('OfficeRemovals.congestion');
    Route::get('packing-service', [OfficeRemovals::class, 'packing_service'])->name('OfficeRemovals.packing_service');
    Route::get('pick_date', [OfficeRemovals::class, 'pick_date'])->name('OfficeRemovals.pick_date');
    Route::get('arrange_time', [OfficeRemovals::class, 'arrange_time'])->name('OfficeRemovals.arrange_time');
    Route::get('final_calculation', [OfficeRemovals::class, 'final_calculation'])->name('OfficeRemovals.final_calculation');
    Route::get('price_page', [OfficeRemovals::class, 'price_page'])->name('OfficeRemovals.price_page');
    Route::get('billing', [OfficeRemovals::class, 'billing'])->name('OfficeRemovals.billing');
    Route::post('get_email', [OfficeRemovals::class, 'get_email'])->name('OfficeRemovals.get_email');

    
    Route::post('update_cart', [OfficeRemovals::class, 'update_cart'])->name('OfficeRemovals.cart.update.cart');
    Route::post('update_time', [OfficeRemovals::class, 'update_time'])->name('OfficeRemovals.cart.update.time');
    Route::post('update_car', [OfficeRemovals::class, 'update_car'])->name('OfficeRemovals.cart.update.car');
    Route::post('update_men', [OfficeRemovals::class, 'update_men'])->name('OfficeRemovals.cart.update.men');
    Route::post('update_number_of_car', [OfficeRemovals::class, 'update_number_of_car'])->name('OfficeRemovals.cart.update.number_of_car');
    Route::post('update_pick_date', [OfficeRemovals::class, 'update_pick_date'])->name('OfficeRemovals.cart.update.pick_date');
    Route::post('update_arrange_hour', [OfficeRemovals::class, 'update_arrange_hour'])->name('OfficeRemovals.cart.update.arrange_hour');
    Route::post('update_congestion', [OfficeRemovals::class, 'update_congestion'])->name('OfficeRemovals.cart.update.congestion');
    Route::post('update_packing_service', [OfficeRemovals::class, 'update_packing_service'])->name('OfficeRemovals.cart.update.packing_service');
    Route::post('update_position', [OfficeRemovals::class, 'update_position'])->name('OfficeRemovals.cart.update.position');
    Route::post('update_stair', [OfficeRemovals::class, 'update_stair'])->name('OfficeRemovals.cart.update.stair');
});










Route::group(['prefix'=>'HomeRemovals'], function (){
    Route::get('house_type', [HomeRemovals::class, 'index'])->name('HomeRemovals.house_type');
    Route::get('select-items', [HomeRemovals::class, 'cart'])->name('HomeRemovals.cart');
    Route::get('timer', [HomeRemovals::class, 'hours_need'])->name('HomeRemovals.hours_need');
    Route::get('chooseman', [HomeRemovals::class, 'men'])->name('HomeRemovals.men');
    Route::get('choose-van', [HomeRemovals::class, 'select_car'])->name('HomeRemovals.select_car');
    Route::get('number_of_strucks', [HomeRemovals::class, 'number_of_car'])->name('HomeRemovals.number_of_car');
    Route::get('add_stairs', [HomeRemovals::class, 'stairs'])->name('HomeRemovals.stairs');
    Route::get('congestion-confirmation', [HomeRemovals::class, 'congestion'])->name('HomeRemovals.congestion');
    Route::get('packing-service', [HomeRemovals::class, 'packing_service'])->name('HomeRemovals.packing_service');
    Route::get('pick_date', [HomeRemovals::class, 'pick_date'])->name('HomeRemovals.pick_date');
    Route::get('arrange_time', [HomeRemovals::class, 'arrange_time'])->name('HomeRemovals.arrange_time');
    Route::get('final_calculation', [HomeRemovals::class, 'final_calculation'])->name('HomeRemovals.final_calculation');
    Route::get('price_page', [HomeRemovals::class, 'price_page'])->name('HomeRemovals.price_page');
    Route::get('billing', [HomeRemovals::class, 'billing'])->name('HomeRemovals.billing');
    Route::post('get_email', [HomeRemovals::class, 'get_email'])->name('HomeRemovals.get_email');
    
    Route::post('update_cart', [HomeRemovals::class, 'update_cart'])->name('HomeRemovals.cart.update.cart');
    Route::post('update_time', [HomeRemovals::class, 'update_time'])->name('HomeRemovals.cart.update.time');
    Route::post('update_car', [HomeRemovals::class, 'update_car'])->name('HomeRemovals.cart.update.car');
    Route::post('update_men', [HomeRemovals::class, 'update_men'])->name('HomeRemovals.cart.update.men');
    Route::post('update_number_of_car', [HomeRemovals::class, 'update_number_of_car'])->name('HomeRemovals.cart.update.number_of_car');
    Route::post('update_pick_date', [HomeRemovals::class, 'update_pick_date'])->name('HomeRemovals.cart.update.pick_date');
    Route::post('update_arrange_hour', [HomeRemovals::class, 'update_arrange_hour'])->name('HomeRemovals.cart.update.arrange_hour');
    Route::post('update_congestion', [HomeRemovals::class, 'update_congestion'])->name('HomeRemovals.cart.update.congestion');
    Route::post('update_packing_service', [HomeRemovals::class, 'update_packing_service'])->name('HomeRemovals.cart.update.packing_service');
    Route::post('update_position', [HomeRemovals::class, 'update_position'])->name('HomeRemovals.cart.update.position');
    Route::post('update_stair', [HomeRemovals::class, 'update_stair'])->name('HomeRemovals.cart.update.stair');
    Route::post('update_house_type', [HomeRemovals::class, 'update_house_type'])->name('HomeRemovals.cart.update.house_type');
});










Route::group(['prefix'=>'Motorbike'], function (){
    // Route::get('/OfficeRemoval/select-items', [OfficeRemovals::class, 'index'])->name('OfficeRemovals');
    Route::get('timer', [Motorbike::class, 'hours_need'])->name('Motorbike.hours_need');
    Route::get('chooseman', [Motorbike::class, 'men'])->name('Motorbike.men');
    Route::get('choose-van', [Motorbike::class, 'select_car'])->name('Motorbike.select_car');
    Route::get('number_of_strucks', [Motorbike::class, 'number_of_car'])->name('Motorbike.number_of_car');
    Route::get('add_stairs', [Motorbike::class, 'stairs'])->name('Motorbike.stairs');
    Route::get('congestion-confirmation', [Motorbike::class, 'congestion'])->name('Motorbike.congestion');
    Route::get('packing-service', [Motorbike::class, 'packing_service'])->name('Motorbike.packing_service');
    Route::get('pick_date', [Motorbike::class, 'pick_date'])->name('Motorbike.pick_date');
    Route::get('arrange_time', [Motorbike::class, 'arrange_time'])->name('Motorbike.arrange_time');
    Route::get('final_calculation', [Motorbike::class, 'final_calculation'])->name('Motorbike.final_calculation');
    Route::get('price_page', [Motorbike::class, 'price_page'])->name('Motorbike.price_page');
    Route::get('billing', [Motorbike::class, 'billing'])->name('Motorbike.billing');
    Route::post('get_email', [Motorbike::class, 'get_email'])->name('Motorbike.get_email');

    
    Route::post('update_cart', [Motorbike::class, 'update_cart'])->name('Motorbike.cart.update.cart');
    Route::post('update_time', [Motorbike::class, 'update_time'])->name('Motorbike.cart.update.time');
    Route::post('update_car', [Motorbike::class, 'update_car'])->name('Motorbike.cart.update.car');
    Route::post('update_men', [Motorbike::class, 'update_men'])->name('Motorbike.cart.update.men');
    Route::post('update_number_of_car', [Motorbike::class, 'update_number_of_car'])->name('Motorbike.cart.update.number_of_car');
    Route::post('update_pick_date', [Motorbike::class, 'update_pick_date'])->name('Motorbike.cart.update.pick_date');
    Route::post('update_arrange_hour', [Motorbike::class, 'update_arrange_hour'])->name('Motorbike.cart.update.arrange_hour');
    Route::post('update_congestion', [Motorbike::class, 'update_congestion'])->name('Motorbike.cart.update.congestion');
    Route::post('update_packing_service', [Motorbike::class, 'update_packing_service'])->name('Motorbike.cart.update.packing_service');
    Route::post('update_position', [Motorbike::class, 'update_position'])->name('Motorbike.cart.update.position');
    Route::post('update_stair', [Motorbike::class, 'update_stair'])->name('Motorbike.cart.update.stair');

});




// Route::get('/furnitureappliance_manvan_eBaydeliveries/book1', function () { return view('book/furniture & appliance and man & van and eBay deliveries/book1');});
// Route::get('/furnitureappliance_manvan_eBaydeliveries/book2', function () { return view('book/furniture & appliance and man & van and eBay deliveries/book2');});
// Route::get('/furnitureappliance_manvan_eBaydeliveries/book3', function () { return view('book/furniture & appliance and man & van and eBay deliveries/book3');});
// Route::get('/homeremovals/book1', function () { return view('book/home removals/book1');});
// Route::get('/homeremovals/book2', function () { return view('book/home removals/book2');});
// Route::get('/homeremovals/book3', function () { return view('book/home removals/book3');});
// Route::get('/homeremovals/book4', function () { return view('book/home removals/book4');});
// Route::get('/homeremovals/book5', function () { return view('book/home removals/book5');});


// Route::get('/homeremovals/book1', [HomeRemovals::class, 'index'])->name('from_to');
// Route::get('/homeremovals/book2', function () { return view('book/home removals/book2');});
// Route::get('/homeremovals/book3', function () { return view('book/home removals/book3');});



// Route::get('/motorbikes/book1', function () { return view('book/motorbikes/book1');});
// Route::get('/motorbikes/book2', function () { return view('book/motorbikes/book2');});
// Route::get('/motorbikes/book3', function () { return view('book/motorbikes/book3');});



// Route::get('/officeremovals/book1', function () { return view('book/office removals/book1');});
// Route::get('/officeremovals/book2', function () { return view('book/office removals/book2');});
// Route::get('/officeremovals/book3', function () { return view('book/office removals/book3');});
// Route::get('/officeremovals/book4', function () { return view('book/office removals/book4');});
Route::get('/WasteRemovals/book', function () { return view('book/waste removals and european moves and storage/book1');})->name('WasteRemovals');
Route::get('/European_moves/book', function () { return view('book/waste removals and european moves and storage/book1');})->name('European_moves');
Route::get('/Storage/book', function () { return view('book/waste removals and european moves and storage/book1');})->name('Storage');


//--------------------------------------------About Us routes--------------------------------------------------------
Route::get('/aboutus', function () { return view('about_us');});

//--------------------------------------------Contact Us routes--------------------------------------------------------
Route::get('/contactus', function () { return view('contact_us');});