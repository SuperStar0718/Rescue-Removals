<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;


class MotorbikeCart extends Model
{
    use HasFactory;
    protected $casts = [
        'cart_list' => 'array',
        'from' => 'array',
        'to' => 'array'
    ];
    public function getDateInfo(){
        $date = DateTime::createFromFormat('Y-m-d', $this->year . '-' . $this->month . '-' . $this->day);
        return $date->format('D d F Y');
    }
    public function getFromAddress(){
        $address = json_decode($this->from, true);
        return $address['formatted_address'];
    }
    public function getToAddress(){
        $address = json_decode($this->to, true);
        return $address['formatted_address'];
    }
    public function getPostCodeFrom(){
        $postcode_from = json_decode($this->from, true);
        $postcode_from = $postcode_from['address_components'];
        foreach ($postcode_from as $key => $value) {
            # code...
            if($value['types'][0]=='postal_code')
                return $value['long_name'];            
        }
        $postcode_from = end($postcode_from);
        return $postcode_from['long_name'] == "United Kingdom" ? '' : $postcode_from['long_name'];
    }
    public function getPostCodeTo(){
        $postcode_from = json_decode($this->to, true);
        $postcode_from = $postcode_from['address_components'];
        foreach ($postcode_from as $key => $value) {
            # code...
            if($value['types'][0]=='postal_code')
                return $value['long_name'];            
        }
        $postcode_from = end($postcode_from);
        return $postcode_from['long_name'] == "United Kingdom" ? '' : $postcode_from['long_name'];
    }
    public function getCity($address){
        $postcode_from = json_decode($address, true);
        $postcode_from = $postcode_from['address_components'];
        foreach ($postcode_from as $key => $value) {
            # code...
            if($value['types'][0]=='postal_town')
                return $value['long_name'];            
        }
    }
    public function getCounty($address){
        $postcode_from = json_decode($address, true);
        $postcode_from = $postcode_from['address_components'];
        foreach ($postcode_from as $key => $value) {
            # code...
            if($value['types'][0]=='administrative_area_level_2')
                return $value['long_name'];            
        }
    }
    public function haversineDistance($lat1, $lon1, $lat2, $lon2) {
        $earthRadius = 6371000; // in meters
    
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
    
        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    
        $distance = $earthRadius * $c;
    
        return $distance;
    }
    public function get_stair($stair){
        $number=0;

        switch ($stair) {
            case 'Basement':
                # code...
                $number = 0;
                break;
            case 'Ground floor':
                # code...
                $number = 0;
                break;
            case '1st floor':
                # code...
                $number = 1;
                break;
            case '2nd floor':
                # code...
                $number = 2;
                break;
            case '3rd floor':
                # code...
                $number = 3;
                break;
            case '4th floor':
                # code...
                $number = 4;
                break;
            case '5th floor':
                # code...
                $number = 5;
                break;
            case '6th floor':
                # code...
                $number = 6;
                break;
            case 'Above 6th floor':
                # code...
                $number = 6;
                break;
         
            
            default:
                # code...
                break;
        }
        return($number);
    }
    public function getPrice(){
        $price = 0;
        if($this->congestion==1)
            $price+=15;
        if($this->packing_service==1)
            $price+=200;

        $from = json_decode($this->from);
        $to = json_decode($this->to);
        $distance = $this->haversineDistance($from->lat, $from->lng, $to->lat, $to->lng);
        $from_stair = $this->get_stair($this->from_stair);
        $to_stair = $this->get_stair($this->to_stair);
        $price = $price + ($from_stair+$to_stair)*15;
        // dd($distance);
        $price += floor($distance/1609) * 1.5;

        switch ($this->van) {
            case 1:
                # code...
                if($this->men==0)
                    $price = $price + 70 * $this->hour;
                if($this->men==1)
                    $price = $price + 90 * $this->hour;
                if($this->men==2)
                    $price = $price + 100 * $this->hour;
                if($this->men==3)
                    $price = $price + 115 * $this->hour;
                if($this->men==4)
                    $price = $price + 130 * $this->hour;
                break;
            case 2:
                # code...
                if($this->men==0)
                    $price = $price + 50 * $this->hour;
                if($this->men==1)
                    $price = $price + 70 * $this->hour;
                if($this->men==2)
                    $price = $price + 80 * $this->hour;
                if($this->men==3)
                    $price = $price + 95 * $this->hour;
                if($this->men==4)
                    $price = $price + 110 * $this->hour;
                break;
            case 3:
                # code...
                if($this->men==0)
                    $price = $price + 40 * $this->hour;
                if($this->men==1)
                    $price = $price + 60 * $this->hour;
                if($this->men==2)
                    $price = $price + 70 * $this->hour;
                if($this->men==3)
                    $price = $price + 85 * $this->hour;
                if($this->men==4)
                    $price = $price + 100 * $this->hour;
                break;
            
            default:
                # code...
                break;
        }

        return $price;
    }
}
