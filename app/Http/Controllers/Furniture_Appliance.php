<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eBayCart;
use App\Models\Furniture_ApplianceCart;
use App\Models\VanType;

class Furniture_Appliance extends Controller
{
    //
    public function index(){
        $component = "Furniture_Appliance";
        $quote_ref = $this->generate_quote_ref();
        return view('book.Furniture_Appliance.main',compact('component', 'quote_ref'));
    }
    public function generate_quote_ref(){
        $microtime = microtime(true); // Current timestamp with microseconds
        $hash = hash('sha256', $microtime); // Hash the timestamp
        
        // Take the first 7 characters of the hash and convert to an integer
        $uniqueNumber = intval(substr($hash, 0, 7), 16);
        
        return $uniqueNumber;
    }
    public function hours_need(){
        $component = "Furniture_Appliance.hours_need";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        return view('book.Furniture_Appliance.main', compact('component','result'));
    }
    public function men(){
        $component = "Furniture_Appliance.men";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        $cart_list = isset($result->cart_list) ? $result->cart_list : '' ;
        $men = $result->men;
        return view('book.Furniture_Appliance.main', compact('component', 'result','men'));
    }
    public function select_car(){
        $component = "Furniture_Appliance.select_car";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        $vans = VanType::all();
        return view('book.Furniture_Appliance.main', compact('component', 'result', 'vans'));
    }
    public function number_of_car(){
        $component = "Furniture_Appliance.number_of_car";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        $van = VanType::where('id', $result->van)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result','van'));
    }
    public function stairs(){
        $component = "Furniture_Appliance.stairs";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result'));
    }
    public function congestion(){
        $component = "Furniture_Appliance.congestion";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result'));
    }
    public function pick_date(){
        $component = "Furniture_Appliance.pick_date";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result'));
    }
    public function arrange_time(){
        $component = "Furniture_Appliance.arrange_time";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        return view('book.Furniture_Appliance.main', compact('component','result'));
    }
    public function final_calculation(){
        $component = "Furniture_Appliance.final_calculation";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        $job_type = "Furniture & Appliance";
        $van = VanType::where('id', $result->van)->first();

        return view('book.Furniture_Appliance.main', compact('component','job_type','result','van'));
    }
    public function final_calculation_post(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $pickup_postcode = $request->pickup_postcode;
        $pickup_add1 = $request->pickup_add1;
        $pickup_add2 = $request->pickup_add2;
        $pickup_city = $request->pickup_city;
        $pickup_county = $request->pickup_county;
        $pickup_contact_name = $request->pickup_contact_name;
        $pickup_contact_number = $request->pickup_contact_number;
        $delivery_postcode = $request->delivery_postcode;
        $delivery_add1 = $request->delivery_add1;
        $delivery_add2 = $request->delivery_add2;
        $delivery_city = $request->delivery_city;
        $delivery_county = $request->delivery_county;
        $delivery_contact_name = $request->delivery_contact_name;
        $delivery_contact_phone = $request->delivery_contact_phone;

        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->username = $name;
            $result->email = $email;
            $result->phone_number = $phone;
            $result->pickup_postcode = $pickup_postcode;
            $result->pickup_address1 = $pickup_add1;
            $result->pickup_address2 = $pickup_add2;
            $result->pickup_city = $pickup_city;
            $result->pickup_county = $pickup_county;
            $result->pickup_name = $pickup_contact_name;
            $result->pickup_phone = $pickup_contact_number;
            $result->delivery_postcode = $delivery_postcode;
            $result->delivery_address1 = $delivery_add1;
            $result->delivery_address2 = $delivery_add2;
            $result->delivery_city = $delivery_city;
            $result->delivery_county = $delivery_county;
            $result->delivery_name = $delivery_contact_name;
            $result->delivery_phone = $delivery_contact_phone;
            $result->save();
        }
        
        return redirect()->route('Furniture_Appliance.price_page');
    }
    public function billing(){
        $component = "Furniture_Appliance.billing";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        $job_type = "Furniture_Appliance";
        $van = VanType::where('id', $result->van)->first();
        return view('book.Furniture_Appliance.main', compact('component','job_type','result','van'));
    }
    public function get_email(Request $request){
        $email = $request->email;
        $mobile = $request->mobile;
        $cart_list = $request->cart_list;
        $pickup_address = $request->pickup_address;
        $delivery_address = $request->delivery_address;
        $quote_ref = $request->quote_ref;
        session()->put('email',$email );
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->phone_number = strval($mobile);
            $result->from = $pickup_address;
            $result->to = $delivery_address;
            $result->cart_list = $cart_list;   
            $result->reference_id = $quote_ref;
            $result->save();
        }
        else{

            $eBaycart = new Furniture_ApplianceCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = $quote_ref;
            $eBaycart->email = $email;
            $eBaycart->phone_number = strval($mobile);
            $eBaycart->from = $pickup_address;
            $eBaycart->to = $delivery_address;
            $eBaycart->cart_list = $cart_list;
            $eBaycart->save();
        }

        return redirect()->route('Furniture_Appliance.hours_need');
    }
    public function price_page(){
        $component = "Furniture_Appliance.price_page";
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        return view('book.Furniture_Appliance.main', compact('component','result'));
    }

    public function update_cart(Request $request){
        $title = $request->title;
        $amount = $request->amount;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
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
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->cart_list=json_encode($data);
            $Furniture_ApplianceCart->save();
            
        }
        return $title;
    }
    public function update_time(Request $request){
        $hour = $request->hour;
        $min = $request->min;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->hour = $hour;
            $result->minute = $min;
            $result->save();
        }
        else{
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->hour = $hour;
            $Furniture_ApplianceCart->minute = $min;
            $Furniture_ApplianceCart->save();
            
        }
        return "";
    }
    public function update_car(Request $request){
        $van = $request->car;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        $car = VanType::where('id',$van)->first();
        if($result){
            $result->van = $van;
            $result->save();
        }
        else{
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->van = $van;
            $Furniture_ApplianceCart->save();
            
        }
        return $car->name;
    }
    public function update_men(Request $request){
        $men = $request->men;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->men = $men;
            $result->save();
        }
        else{
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->men = $men;
            $Furniture_ApplianceCart->save();
            
        }
        return "";
    }
    public function update_number_of_car(Request $request){
        $count = $request->count;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->number_of_car = $count;
            $result->save();
        }
        else{
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->number_of_car = $count;
            $Furniture_ApplianceCart->save();
            
        }
        return "";
    }
    public function update_pick_date(Request $request){
        $year    = $request->year;
        $month    = $request->month;
        $day    = $request->day;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $result->save();
        }
        else{
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $Furniture_ApplianceCart->save();
        }
        return "";
    }
    public function update_arrange_hour(Request $request){
        $hour = $request->hour;
        $min = $request->min;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->arrange_hour = $hour;
            $result->arrange_minute = $min;
            $result->save();
        }
        else{
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->arrange_hour = $hour;
            $Furniture_ApplianceCart->arrange_minute = $min;
            $Furniture_ApplianceCart->save();
            
        }
        return "";
    }
    public function update_congestion(Request $request){
        $congestion = $request->congestion;
        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->congestion = $congestion;
            $result->save();
        }
        else{
            $Furniture_ApplianceCart = new eBayCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->congestion = $congestion;
            $Furniture_ApplianceCart->save();
        }
        return "";
    }
    public function update_position(Request $request){
        $from = $request->from;
        $to = $request->to;

        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
        if($result){
            $result->from = json_encode($from);
            $result->to = json_encode($to);
            $result->save();
        }
        else{
            $eBaycart = new Furniture_ApplianceCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->cart_list = '';
            $eBaycart->from = json_encode($from);
            $eBaycart->to = json_encode($to);
            $eBaycart->save();
        }
        
        return route('Furniture_Appliance');
    }
    public function update_stair(Request $request){
        $direction = $request->direction;
        $value = $request->value;

        $email = session()->get('email');
        $result = Furniture_ApplianceCart::where('email', $email)->first();
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
}
