<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeRemovalsCart;
use App\Models\VanType;

class HomeRemovals extends Controller
{
    //
    public function index(){
        $component = "HomeRemovals.house_type";
        return view('book.HomeRemovals.main',compact('component'));
    }
    public function place_details(){
        $component = "HomeRemovals.place_details";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if(!$result)
        {
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->save();
            $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        }
        return view('book.HomeRemovals.main',compact('component', 'result'));
    }
    public function get_email(Request $request){
        $email = $request->email;
        $mobile = $request->mobile;
        $pickup_address = $request->pickup_address;
        $delivery_address = $request->delivery_address;
        $pick_address_type = $request->pick_address_type;
        $delivery_address_type = $request->delivery_address_type;
        session()->put('email',$email );
        $result = HomeRemovalsCart::where('email', $email)->first();

        if($result){
            $result->phone_number = strval($mobile);
            $result->from = $pickup_address;
            $result->to = $delivery_address;
            $result->from_type = $pick_address_type;
            $result->to_type = $delivery_address_type;
            $result->save();
        }
        else{

            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->email = $email;
            $eBaycart->phone_number = strval($mobile);
            $eBaycart->from = $pickup_address;
            $eBaycart->to = $delivery_address;
            $eBaycart->from_type = $pick_address_type;
            $eBaycart->to_type = $delivery_address_type;
            $eBaycart->save();
        }



        return redirect()->route('HomeRemovals.cart');
    }
    public function cart(){
        $component = "HomeRemovals.cart";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if(!$result)
        {
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->save();
            $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        }
        return view('book.HomeRemovals.main',compact('component', 'result'));
    }
    public function hours_need(){
        $component = "HomeRemovals.hours_need";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if(!$result)
        {
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->save();
            $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        }
        return view('book.HomeRemovals.main', compact('component','result'));
    }
    public function men(){
        $component = "HomeRemovals.men";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        $cart_list = isset($result->cart_list) ? $result->cart_list : '' ;
        $men = $result->men;
        return view('book.HomeRemovals.main', compact('component', 'result','men'));
    }
    public function select_car(){
        $component = "HomeRemovals.select_car";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        $vans = VanType::all();
        return view('book.HomeRemovals.main', compact('component', 'result', 'vans'));
    }
    public function number_of_car(){
        $component = "HomeRemovals.number_of_car";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        $van = VanType::where('id', $result->van)->first();
        return view('book.HomeRemovals.main', compact('component', 'result','van'));
    }
    public function stairs(){
        $component = "HomeRemovals.stairs";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        return view('book.HomeRemovals.main', compact('component', 'result'));
    }
    public function congestion(){
        $component = "HomeRemovals.congestion";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        return view('book.HomeRemovals.main', compact('component', 'result'));
    }
    public function packing_service(){
        $component = "HomeRemovals.packing_service";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        return view('book.HomeRemovals.main', compact('component', 'result'));
    }
    public function pick_date(){
        $component = "HomeRemovals.pick_date";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        $price = 0;
        if($result->congestion==1)
            $price+=15;
        switch ($result->van) {
            case 1:
                # code...
                $price += (70+$result->men * 20) * $result->number_of_car;
                break;
            case 2:
                # code...
                $price += (50+$result->men * 20) * $result->number_of_car;
                break;
            case 3:
                # code...
                $price += (40+$result->men * 20) * $result->number_of_car;
                break;
            
            default:
                # code...
                break;
        }
        return view('book.HomeRemovals.main', compact('component', 'result','price'));
    }
    public function arrange_time(){
        $component = "HomeRemovals.arrange_time";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        return view('book.HomeRemovals.main', compact('component','result'));
    }
    public function final_calculation(){
        $component = "HomeRemovals.final_calculation";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        $job_type = "Home Removals";
        $van = VanType::where('id', $result->van)->first();

        return view('book.HomeRemovals.main', compact('component','job_type','result','van'));
    }
    public function billing(){
        $component = "HomeRemovals.billing";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        $job_type = "Home Removals";
        $van = VanType::where('id', $result->van)->first();
        return view('book.HomeRemovals.main', compact('component','job_type','result','van'));
    }
    public function price_page(){
        $component = "HomeRemovals.price_page";
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        return view('book.HomeRemovals.main', compact('component','result'));
    }

    public function final_calculation_post(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $pickup_add1 = $request->pickup_add1;
        $pickup_add2 = $request->pickup_add2;
        $pickup_city = $request->pickup_city;
        $pickup_county = $request->pickup_county;
        $pickup_contact_name = $request->pickup_contact_name;
        $pickup_contact_number = $request->pickup_contact_number;
        $delivery_add1 = $request->delivery_add1;
        $delivery_add2 = $request->delivery_add2;
        $delivery_city = $request->delivery_city;
        $delivery_county = $request->delivery_county;
        $delivery_contact_name = $request->delivery_contact_name;
        $delivery_contact_phone = $request->delivery_contact_phone;

        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->username = $name;
            $result->email = $email;
            $result->phone_number = $phone;
            $result->pickup_address1 = $pickup_add1;
            $result->pickup_address2 = $pickup_add2;
            $result->pickup_city = $pickup_city;
            $result->pickup_county = $pickup_county;
            $result->pickup_name = $pickup_contact_name;
            $result->pickup_phone = $pickup_contact_number;
            $result->delivery_address1 = $delivery_add1;
            $result->delivery_address2 = $delivery_add2;
            $result->delivery_city = $delivery_city;
            $result->delivery_county = $delivery_county;
            $result->delivery_name = $delivery_contact_name;
            $result->delivery_phone = $delivery_contact_phone;
            $result->save();
        }
        
        return redirect()->route('HomeRemovals.price_page');
    }
    public function update_cart(Request $request){
        $title = $request->title;
        $amount = $request->amount;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $data = $result->cart_list;
            $data = json_decode($data, true);
            $data[$title]=$amount;
            $result->cart_list = json_encode($data);
            $result->save();
            return json_encode($data);
            // Use the $name value
        }
        else{
            $data[$title]=$amount;
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->cart_list=json_encode($data);
            $eBaycart->save();
            
        }
        return $title;
    }
    public function update_time(Request $request){
        $hour = $request->hour;
        $min = $request->min;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->hour = $hour;
            $result->minute = $min;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->hour = $hour;
            $eBaycart->minute = $min;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_car(Request $request){
        $van = $request->car;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        $car = VanType::where('id',$van)->first();
        if($result){
            $result->van = $van;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->van = $van;
            $eBaycart->save();
            
        }
        return $car->name;
    }
    public function update_men(Request $request){
        $men = $request->men;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->men = $men;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->men = $men;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_number_of_car(Request $request){
        $count = $request->count;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->number_of_car = $count;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->number_of_car = $count;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_pick_date(Request $request){
        $year    = $request->year;
        $month    = $request->month;
        $day    = $request->day;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $eBaycart->save();
        }
        return "";
    }
    public function update_arrange_hour(Request $request){
        $hour = $request->hour;
        $min = $request->min;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->arrange_hour = $hour;
            $result->arrange_minute = $min;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->arrange_hour = $hour;
            $eBaycart->arrange_minute = $min;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_congestion(Request $request){
        $congestion = $request->congestion;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->congestion = $congestion;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->congestion = $congestion;
            $eBaycart->save();
        }
        return "";
    }
    public function update_packing_service(Request $request){
        $packing_service = $request->packing_service;
        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->packing_service = $packing_service;
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->packing_service = $packing_service;
            $eBaycart->save();
        }
        return "";
    }
    public function update_position(Request $request){
        $from = $request->from;
        $to = $request->to;

        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            $result->from = json_encode($from);
            $result->to = json_encode($to);
            $result->save();
        }
        else{
            $eBaycart = new HomeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->cart_list = '';
            $eBaycart->from = json_encode($from);
            $eBaycart->to = json_encode($to);
            $eBaycart->save();
        }
        
        return route('HomeRemovals.house_type');

    }
    public function update_stair(Request $request){
        $direction = $request->direction;
        $value = $request->value;

        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            if($direction=='from'){
                $result->from_stair = $value;
            }
            else if($direction=='to'){
                $result->to_stair = $value;
            }
            $result->save();
        }
        
        return "";
    }
    public function update_house_type(Request $request){
        $type = $request->type;
        $value = $request->value;

        $email = session()->get('email');
        $result = HomeRemovalsCart::where('email', $email)->first();
        if($result){
            if($type=='from'){
                $result->from_type = $value;
            }
            else if($type=='to'){
                $result->to_type = $value;
            }
            $result->save();
        }
        
        return $type;
    }
}
