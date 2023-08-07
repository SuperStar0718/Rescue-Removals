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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        if($result)
            $cart_list =  $result->cart_list;
        else
        {
            $Furniture_ApplianceCart = new Furniture_ApplianceCart();
            $Furniture_ApplianceCart->userid = 1;
            $Furniture_ApplianceCart->reference_id = 1887654;
            $Furniture_ApplianceCart->cart_list = '';
            $Furniture_ApplianceCart->save();
            $result = Furniture_ApplianceCart::where('userid', 1)->first();
        }
        return view('book.Furniture_Appliance.main',compact('component', 'result'));
    }
    public function hours_need(){
        $component = "Furniture_Appliance.hours_need";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        return view('book.Furniture_Appliance.main', compact('component','result'));
    }
    public function men(){
        $component = "Furniture_Appliance.men";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        $cart_list = isset($result->cart_list) ? $result->cart_list : '' ;
        $men = $result->men;
        return view('book.Furniture_Appliance.main', compact('component', 'result','men'));
    }
    public function select_car(){
        $component = "Furniture_Appliance.select_car";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        $vans = VanType::all();
        return view('book.Furniture_Appliance.main', compact('component', 'result', 'vans'));
    }
    public function number_of_car(){
        $component = "Furniture_Appliance.number_of_car";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        $van = VanType::where('id', $result->van)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result','van'));
    }
    public function stairs(){
        $component = "Furniture_Appliance.stairs";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result'));
    }
    public function congestion(){
        $component = "Furniture_Appliance.congestion";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result'));
    }
    public function pick_date(){
        $component = "Furniture_Appliance.pick_date";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        return view('book.Furniture_Appliance.main', compact('component', 'result'));
    }
    public function arrange_time(){
        $component = "Furniture_Appliance.arrange_time";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        return view('book.Furniture_Appliance.main', compact('component','result'));
    }
    public function final_calculation(){
        $component = "Furniture_Appliance.final_calculation";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        $job_type = "Furniture & Appliance";
        $van = VanType::where('id', $result->van)->first();

        return view('book.Furniture_Appliance.main', compact('component','job_type','result','van'));
    }
    public function billing(){
        $component = "Furniture_Appliance.billing";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        $job_type = "Furniture_Appliance";
        $van = VanType::where('id', $result->van)->first();
        return view('book.Furniture_Appliance.main', compact('component','job_type','result','van'));
    }
    public function get_email(Request $request){
        $email = $request->email;
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        if(!$result)
        {
            $eBaycart = new Furniture_ApplianceCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->email = $email;
            $eBaycart->save();
            $result = Furniture_ApplianceCart::where('userid', 1)->first();
        }
        else
        {
            $result->email = $email;
            $result->save();
        }

        return redirect()->route('Furniture_Appliance.hours_need');
    }
    public function price_page(){
        $component = "Furniture_Appliance.price_page";
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
        return view('book.Furniture_Appliance.main', compact('component','result'));
    }

    public function update_cart(Request $request){
        $title = $request->title;
        $amount = $request->amount;
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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

        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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

        $result = Furniture_ApplianceCart::where('userid', 1)->first();
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
