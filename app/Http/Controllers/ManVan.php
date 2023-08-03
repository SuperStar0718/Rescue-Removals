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
        $result = ManVanCart::where('userid', 1)->first();
        if($result)
            $cart_list =  $result->cart_list;
        else
        {
            $ManVanCart = new ManVanCart();
            $ManVanCart->userid = 1;
            $ManVanCart->reference_id = 1887654;
            $ManVanCart->cart_list = 'asdf';
            $ManVanCart->save();
            $result = ManVanCart::where('userid', 1)->first();
        }
        return view('book.ManVan.main',compact('component', 'result'));
    }
    public function hours_need(){
        $component = "ManVan.hours_need";
        $result = ManVanCart::where('userid', 1)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function men(){
        $component = "ManVan.men";
        $result = ManVanCart::where('userid', 1)->first();
        $cart_list = isset($result->cart_list) ? $result->cart_list : '' ;
        $men = $result->men;
        return view('book.ManVan.main', compact('component', 'result','men'));
    }
    public function select_car(){
        $component = "ManVan.select_car";
        $result = ManVanCart::where('userid', 1)->first();
        $vans = VanType::all();
        return view('book.ManVan.main', compact('component', 'result', 'vans'));
    }
    public function number_of_car(){
        $component = "ManVan.number_of_car";
        $result = ManVanCart::where('userid', 1)->first();
        $van = VanType::where('id', $result->van)->first();
        return view('book.ManVan.main', compact('component', 'result','van'));
    }
    public function stairs(){
        $component = "ManVan.stairs";
        $result = ManVanCart::where('userid', 1)->first();
        return view('book.ManVan.main', compact('component', 'result'));
    }
    public function congestion(){
        $component = "ManVan.congestion";
        $result = ManVanCart::where('userid', 1)->first();
        return view('book.ManVan.main', compact('component', 'result'));
    }
    public function pick_date(){
        $component = "ManVan.pick_date";
        $result = ManVanCart::where('userid', 1)->first();
        return view('book.ManVan.main', compact('component', 'result'));
    }
    public function arrange_time(){
        $component = "ManVan.arrange_time";
        $result = ManVanCart::where('userid', 1)->first();
        return view('book.ManVan.main', compact('component','result'));
    }
    public function final_calculation(){
        $component = "ManVan.final_calculation";
        $result = ManVanCart::where('userid', 1)->first();
        $job_type = "ManVan";
        $van = VanType::where('id', $result->van)->first();

        return view('book.ManVan.main', compact('component','job_type','result','van'));
    }
    public function billing(){
        $component = "ManVan.billing";
        $result = ManVanCart::where('userid', 1)->first();
        $job_type = "ManVan";
        $van = VanType::where('id', $result->van)->first();
        return view('book.ManVan.main', compact('component','job_type','result','van'));
    }
    public function price_page(){
        $component = "ManVan.price_page";
        $result = ManVanCart::where('userid', 1)->first();
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
        return view('book.ManVan.main', compact('component','result','price'));
    }

    public function update_cart(Request $request){
        $title = $request->title;
        $amount = $request->amount;
        $result = ManVanCart::where('userid', 1)->first();
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
        $result = ManVanCart::where('userid', 1)->first();
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
        $result = ManVanCart::where('userid', 1)->first();
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
        $result = ManVanCart::where('userid', 1)->first();
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
        $result = ManVanCart::where('userid', 1)->first();
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
        $result = ManVanCart::where('userid', 1)->first();
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
        $result = ManVanCart::where('userid', 1)->first();
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
        $result = ManVanCart::where('userid', 1)->first();
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

        $result = ManVanCart::where('userid', 1)->first();
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

        $result = ManVanCart::where('userid', 1)->first();
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
