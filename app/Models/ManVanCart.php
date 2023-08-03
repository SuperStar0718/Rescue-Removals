<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class ManVanCart extends Model
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
        $postcode_from = end($postcode_from);
        return $postcode_from['long_name'] == "United Kingdom" ? '' : $postcode_from['long_name'];
    }
    public function getPostCodeTo(){
        $postcode_from = json_decode($this->to, true);
        $postcode_from = $postcode_from['address_components'];
        $postcode_from = end($postcode_from);
        return $postcode_from['long_name'] == "United Kingdom" ? '' : $postcode_from['long_name'];
    }
    public function getPrice(){
        $price = 0;
        if($this->congestion==1)
            $price+=15;
        switch ($this->van) {
            case 1:
                # code...
                $price += (70+$this->men * 20) * $this->number_of_car;
                break;
            case 2:
                # code...
                $price += (50+$this->men * 20) * $this->number_of_car;
                break;
            case 3:
                # code...
                $price += (40+$this->men * 20) * $this->number_of_car;
                break;
            
            default:
                # code...
                break;
        }
        return $price;
    }
}
