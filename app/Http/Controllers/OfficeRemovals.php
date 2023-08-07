<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VanType;
use App\Models\OfficeRemovalsCart;


class OfficeRemovals extends Controller
{
    //
    public function index(){
        $component = "OfficeRemovals";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if(!$result)
        {
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->cart_list = '';
            $eBaycart->save();
            $result = OfficeRemovalsCart::where('userid', 1)->first();
        }
        return view('book.OfficeRemovals.main',compact('component', 'result'));
    }
    public function hours_need(){
        $component = "OfficeRemovals.hours_need";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if(!$result)
        {
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->save();
            $result = OfficeRemovalsCart::where('userid', 1)->first();
        }
        return view('book.OfficeRemovals.main', compact('component','result'));
    }
    public function men(){
        $component = "OfficeRemovals.men";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        $cart_list = isset($result->cart_list) ? $result->cart_list : '' ;
        $men = $result->men;
        return view('book.OfficeRemovals.main', compact('component', 'result','men'));
    }
    public function select_car(){
        $component = "OfficeRemovals.select_car";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        $vans = VanType::all();
        return view('book.OfficeRemovals.main', compact('component', 'result', 'vans'));
    }
    public function number_of_car(){
        $component = "OfficeRemovals.number_of_car";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        $van = VanType::where('id', $result->van)->first();
        return view('book.OfficeRemovals.main', compact('component', 'result','van'));
    }
    public function stairs(){
        $component = "OfficeRemovals.stairs";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        return view('book.OfficeRemovals.main', compact('component', 'result'));
    }
    public function congestion(){
        $component = "OfficeRemovals.congestion";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        return view('book.OfficeRemovals.main', compact('component', 'result'));
    }
    public function packing_service(){
        $component = "OfficeRemovals.packing_service";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        return view('book.OfficeRemovals.main', compact('component', 'result'));
    }
    public function pick_date(){
        $component = "OfficeRemovals.pick_date";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        return view('book.OfficeRemovals.main', compact('component', 'result'));
    }
    public function arrange_time(){
        $component = "OfficeRemovals.arrange_time";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        return view('book.OfficeRemovals.main', compact('component','result'));
    }
    public function final_calculation(){
        $component = "OfficeRemovals.final_calculation";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        $job_type = "Office Removals";
        $van = VanType::where('id', $result->van)->first();

        return view('book.OfficeRemovals.main', compact('component','job_type','result','van'));
    }
    public function billing(){
        $component = "OfficeRemovals.billing";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        $job_type = "Office Removals";
        $van = VanType::where('id', $result->van)->first();
        return view('book.OfficeRemovals.main', compact('component','job_type','result','van'));
    }
    public function get_email(Request $request){
        $email = $request->email;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if(!$result)
        {
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->email = $email;
            $eBaycart->save();
            $result = OfficeRemovalsCart::where('userid', 1)->first();
        }
        else
        {
            $result->email = $email;
            $result->save();
        }

        return redirect()->route('OfficeRemovals.men');
    }
    public function price_page(){
        $component = "OfficeRemovals.price_page";
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        return view('book.OfficeRemovals.main', compact('component','result'));
    }

    public function update_cart(Request $request){
        $title = $request->title;
        $amount = $request->amount;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
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
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->cart_list=json_encode($data);
            $eBaycart->save();
            
        }
        return $title;
    }
    public function update_time(Request $request){
        $hour = $request->hour;
        $min = $request->min;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->hour = $hour;
            $result->minute = $min;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->hour = $hour;
            $eBaycart->minute = $min;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_car(Request $request){
        $van = $request->car;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        $car = VanType::where('id',$van)->first();
        if($result){
            $result->van = $van;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->van = $van;
            $eBaycart->save();
            
        }
        return $car->name;
    }
    public function update_men(Request $request){
        $men = $request->men;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->men = $men;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->men = $men;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_number_of_car(Request $request){
        $count = $request->count;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->number_of_car = $count;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
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
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->year = $year;
            $result->month = $month;
            $result->day = $day;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
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
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->arrange_hour = $hour;
            $result->arrange_minute = $min;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->arrange_hour = $hour;
            $eBaycart->arrange_minute = $min;
            $eBaycart->save();
            
        }
        return "";
    }
    public function update_congestion(Request $request){
        $congestion = $request->congestion;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->congestion = $congestion;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->congestion = $congestion;
            $eBaycart->save();
        }
        return "";
    }
    public function update_packing_service(Request $request){
        $packing_service = $request->packing_service;
        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->packing_service = $packing_service;
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->packing_service = $packing_service;
            $eBaycart->save();
        }
        return "";
    }
    public function update_position(Request $request){
        $from = $request->from;
        $to = $request->to;

        $result = OfficeRemovalsCart::where('userid', 1)->first();
        if($result){
            $result->from = json_encode($from);
            $result->to = json_encode($to);
            $result->save();
        }
        else{
            $eBaycart = new OfficeRemovalsCart();
            $eBaycart->userid = 1;
            $eBaycart->reference_id = 1887654;
            $eBaycart->from = json_encode($from);
            $eBaycart->to = json_encode($to);
            $eBaycart->save();
        }
        
        return route('OfficeRemovals.hours_need');

    }
    public function update_stair(Request $request){
        $direction = $request->direction;
        $value = $request->value;

        $result = OfficeRemovalsCart::where('userid', 1)->first();
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
