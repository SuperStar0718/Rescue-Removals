<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManVanCart;
use App\Models\VanType;

class ManVan extends Controller
{
    //
    public function index(){
        $component = "ManVan";
        $quote_ref = $this->generate_quote_ref();
        return view('book.ManVan.main',compact('component', 'quote_ref'));
    }
    public function generate_quote_ref(){
        $microtime = microtime(true); // Current timestamp with microseconds
        $hash = hash('sha256', $microtime); // Hash the timestamp
        
        // Take the first 7 characters of the hash and convert to an integer
        $uniqueNumber = intval(substr($hash, 0, 7), 16);
        
        return $uniqueNumber;
    }
    public function hours_need(){
        $component = "ManVan.hours_need";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function men(){
        $component = "ManVan.men";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        $cart_list = isset($result->cart_list) ? $result->cart_list : '' ;
        $men = $result->men;
        return view('book.ManVan.main', compact('component', 'result','men'));
    }
    public function select_car(){
        $component = "ManVan.select_car";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        $vans = VanType::all();
        return view('book.ManVan.main', compact('component', 'result', 'vans'));
    }
    public function number_of_car(){
        $component = "ManVan.number_of_car";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        $van = VanType::where('id', $result->van)->first();
        return view('book.ManVan.main', compact('component', 'result','van'));
    }
    public function stairs(){
        $component = "ManVan.stairs";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component', 'result'));
    }
    public function congestion(){
        $component = "ManVan.congestion";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component', 'result'));
    }
    public function pick_date(){
        $component = "ManVan.pick_date";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component', 'result'));
    }
    public function arrange_time(){
        $component = "ManVan.arrange_time";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function final_calculation(){
        $component = "ManVan.final_calculation";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        $job_type = "ManVan";
        $van = VanType::where('id', $result->van)->first();

        return view('book.ManVan.main', compact('component','job_type','result','van'));
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
        $result = ManVanCart::where('email', $email)->first();
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
        
        return redirect()->route('ManVan.price_page');
    }
    public function billing(){
        $component = "ManVan.billing";
        $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        $job_type = "ManVan";
        $van = VanType::where('id', $result->van)->first();
        return view('book.ManVan.main', compact('component','job_type','result','van'));
    }
    public function get_email(Request $request){
        $email = $request->email;
        $mobile = $request->mobile;
        $cart_list = $request->cart_list;
        $pickup_address = $request->pickup_address;
        $delivery_address = $request->delivery_address;
        $quote_ref = $request->quote_ref;
        session()->put('email',$email );
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->phone_number = strval($mobile);
            $result->from = $pickup_address;
            $result->to = $delivery_address;
            $result->cart_list = $cart_list;  
            $result->reference_id = $quote_ref;  
            $result->save();
        }
        else{

            $eBaycart = new ManVanCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = $quote_ref;
            $eBaycart->email = $email;
            $eBaycart->phone_number = strval($mobile);
            $eBaycart->from = $pickup_address;
            $eBaycart->to = $delivery_address;
            $eBaycart->cart_list = $cart_list;
            $eBaycart->save();
        }

        return redirect()->route('ManVan.hours_need');
    }
        public function view_item(){
        $component = "ManVan.ViewItems";
        $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function booking_details(){
        $component = "ManVan.BookingDetails";
        $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function pickup_details(){
        $component = "ManVan.PickupDetails";
        $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function delivery_details(){
        $component = "ManVan.DeliveryDetails";
        $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function payment_details(){
        $component = "ManVan.PaymentDetails";
        $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function booking_details_post(Request $request){
        $name = $request->name;
        $email_new = $request->email;
        $number = $request->number;
        $email = session()->get('email');

        $result = ManVanCart::where('email', $email)->first();

        if($result){
            $result->phone_number = strval($number);
            $result->username = $name;
            $result->phone_number= $number;
            $result->email = $email_new;
            $result->save();
        }

        return redirect()->route('ManVan.PickupDetails');
    }
    public function pickup_details_post(Request $request){
        $postcode = $request->pickup_postcode;
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $city = $request->city;
        $contact_name_pickup = $request->contact_name_pickup;
        $email = session()->get('email');

        $result = ManVanCart::where('email', $email)->first();

        if($result){
            $result->pickup_postcode = $postcode;
            $result->pickup_address1 = $address_1;
            $result->pickup_address2= $address_2;
            $result->pickup_county = $city;
            $result->pickup_name = $contact_name_pickup;
            $result->save();
        }

        return redirect()->route('ManVan.DeliveryDetails');
    }
    public function delivery_details_post(Request $request){
        $postcode = $request->delivery_postcode;
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $city = $request->city;
        $contact_name_pickup = $request->contact_name_delivery;
        $email = session()->get('email');

        $result = ManVanCart::where('email', $email)->first();

        if($result){
            $result->delivery_postcode = $postcode;
            $result->delivery_address1 = $address_1;
            $result->delivery_address2= $address_2;
            $result->delivery_city = $city;
            $result->delivery_name = $contact_name_pickup;
            $result->save();
        }

        return redirect()->route('ManVan.price_page');
    }
    public function price_page(){
        $component = "ManVan.price_page";
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        return view('book.ManVan.main', compact('component','result'));
    }

    public function update_cart(Request $request){
        $title = $request->title;
        $amount = $request->amount;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
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
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->cart_list=json_encode($data);
            $ManVanCart->save();
            
        }
        return $title;
    }
    public function update_time(Request $request){
        $hour = $request->hour;
        $min = $request->min;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->hour = $hour;
            $result->minute = $min;
            $result->save();
        }
        else{
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->hour = $hour;
            $ManVanCart->minute = $min;
            $ManVanCart->save();
            
        }
        return "";
    }
    public function update_car(Request $request){
        $van = $request->car;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        $car = VanType::where('id',$van)->first();
        if($result){
            $result->van = $van;
            $result->save();
        }
        else{
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->van = $van;
            $ManVanCart->save();
            
        }
        return $car->name;
    }
    public function update_men(Request $request){
        $men = $request->men;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->men = $men;
            $result->save();
        }
        else{
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->men = $men;
            $ManVanCart->save();
            
        }
        return "";
    }
    public function update_number_of_car(Request $request){
        $count = $request->count;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->number_of_car = $count;
            $result->save();
        }
        else{
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->number_of_car = $count;
            $ManVanCart->save();
            
        }
        return "";
    }
    public function update_pick_date(Request $request){
        $year    = $request->year;
        $month    = $request->month;
        $day    = $request->day;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $result->save();
        }
        else{
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $ManVanCart->save();
        }
        return "";
    }
    public function update_arrange_hour(Request $request){
        $hour = $request->hour;
        $min = $request->min;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->arrange_hour = $hour;
            $result->arrange_minute = $min;
            $result->save();
        }
        else{
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->arrange_hour = $hour;
            $ManVanCart->arrange_minute = $min;
            $ManVanCart->save();
            
        }
        return "";
    }
    public function update_congestion(Request $request){
        $congestion = $request->congestion;
                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->congestion = $congestion;
            $result->save();
        }
        else{
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->congestion = $congestion;
            $ManVanCart->save();
        }
        return "";
    }
    public function update_position(Request $request){
        $from = $request->from;
        $to = $request->to;

                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
        if($result){
            $result->from = json_encode($from);
            $result->to = json_encode($to);
            $result->save();
        }
        else{
            $eBaycart = new ManVanCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->cart_list = '';
            $eBaycart->from = json_encode($from);
            $eBaycart->to = json_encode($to);
            $eBaycart->save();
        }
        
        return route('ManVan');

    }
    public function update_stair(Request $request){
        $direction = $request->direction;
        $value = $request->value;

                $email = session()->get('email');
        $result = ManVanCart::where('email', $email)->first();
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
