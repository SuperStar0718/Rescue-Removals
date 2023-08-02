<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\eBayCart;
use App\Models\VanType;

class eBayDeliveries extends Controller
{
    //
    public function index(){
        $component = "eBay";
        $result = eBayCart::where('userid', 1)->first();
        if($result)
            $cart_list =  $result->cart_list;
        else
        {
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->cart_list = '';
            $eBaycart->save();
            $result = eBayCart::where('userid', 1)->first();
        }
        return view('book.eBayDelivery.main',compact('component', 'result'));
    }
    public function hours_need(){
        $component = "eBay.hours_need";
        $result = eBayCart::where('userid', 1)->first();
        return view('book.eBayDelivery.main', compact('component','result'));
    }
    public function men(){
        $component = "eBay.men";
        $result = eBayCart::where('userid', 1)->first();
        $cart_list = isset($result->cart_list) ? $result->cart_list : '' ;
        $men = $result->men;
        return view('book.eBayDelivery.main', compact('component', 'result','men'));
    }
    public function select_car(){
        $component = "eBay.select_car";
        $result = eBayCart::where('userid', 1)->first();
        $vans = VanType::all();
        return view('book.eBayDelivery.main', compact('component', 'result', 'vans'));
    }
    public function number_of_car(){
        $component = "eBay.number_of_car";
        $result = eBayCart::where('userid', 1)->first();
        $van = VanType::where('id', $result->van)->first();
        return view('book.eBayDelivery.main', compact('component', 'result','van'));
    }
    public function stairs(){
        $component = "eBay.stairs";
        $result = eBayCart::where('userid', 1)->first();
        return view('book.eBayDelivery.main', compact('component', 'result'));
    }
    public function congestion(){
        $component = "eBay.congestion";
        $result = eBayCart::where('userid', 1)->first();
        return view('book.eBayDelivery.main', compact('component', 'result'));
    }
    public function pick_date(){
        $component = "eBay.pick_date";
        $result = eBayCart::where('userid', 1)->first();
        return view('book.eBayDelivery.main', compact('component', 'result'));
    }
    public function arrange_time(){
        $component = "eBay.arrange_time";
        $result = eBayCart::where('userid', 1)->first();
        return view('book.eBayDelivery.main', compact('component','result'));
    }
    public function final_calculation(){
        $component = "eBay.final_calculation";
        $result = eBayCart::where('userid', 1)->first();
        $job_type = "eBay Deliveries";
        $van = VanType::where('id', $result->van)->first();

        return view('book.eBayDelivery.main', compact('component','job_type','result','van'));
    }
    public function billing(){
        $component = "eBay.billing";
        $result = eBayCart::where('userid', 1)->first();
        $job_type = "eBay Deliveries";
        $van = VanType::where('id', $result->van)->first();
        return view('book.eBayDelivery.main', compact('component','job_type','result','van'));
    }
    public function price_page(){
        $component = "eBay.price_page";
        $result = eBayCart::where('userid', 1)->first();
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
        return view('book.eBayDelivery.main', compact('component','result','price'));
    }

    public function update_cart(Request $request){
        $title = $request->title;
        $amount = $request->amount;
        $result = eBayCart::where('userid', 1)->first();
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
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->cart_list=json_encode($data);
            $eBaycart->save();
            
        }
        return $title;
    }
    public function update_time(Request $request){
        $hour = $request->hour;
        $min = $request->min;
        $result = eBayCart::where('userid', 1)->first();
        if($result){
            $result->hour = $hour;
            $result->minute = $min;
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->hour = $hour;
            $eBaycart->minute = $min;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_car(Request $request){
        $van = $request->car;
        $result = eBayCart::where('userid', 1)->first();
        $car = VanType::where('id',$van)->first();
        if($result){
            $result->van = $van;
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->van = $van;
            $eBaycart->save();
            
        }
        return $car->name;
    }
    public function update_men(Request $request){
        $men = $request->men;
        $result = eBayCart::where('userid', 1)->first();
        if($result){
            $result->men = $men;
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->men = $men;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_number_of_car(Request $request){
        $count = $request->count;
        $result = eBayCart::where('userid', 1)->first();
        if($result){
            $result->number_of_car = $count;
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
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
        $result = eBayCart::where('userid', 1)->first();
        if($result){
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
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
        $result = eBayCart::where('userid', 1)->first();
        if($result){
            $result->arrange_hour = $hour;
            $result->arrange_minute = $min;
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->arrange_hour = $hour;
            $eBaycart->arrange_minute = $min;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_congestion(Request $request){
        $congestion = $request->congestion;
        $result = eBayCart::where('userid', 1)->first();
        if($result){
            $result->congestion = $congestion;
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->congestion = $congestion;
            $eBaycart->save();
        }
        return "";
    }
    public function update_position(Request $request){
        $from = $request->from;
        $to = $request->to;

        $result = eBayCart::where('userid', 1)->first();
        if($result){
            $result->from = json_encode($from);
            $result->to = json_encode($to);
            $result->save();
        }
        else{
            $eBaycart = new eBayCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->cart_list = '';
            $eBaycart->from = json_encode($from);
            $eBaycart->to = json_encode($to);
            $eBaycart->save();
        }
        
        return route('eBay');
    }
    public function update_stair(Request $request){
        $direction = $request->direction;
        $value = $request->value;

        $result = eBayCart::where('userid', 1)->first();
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
