<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class OfficeRemovalsCart extends Model
{
    use HasFactory;
    protected $casts = [
        'from' => 'array',
        'to' => 'array'
    ];
    public function getDateInfo(){
        $date = DateTime::createFromFormat('Y-m-d', $this->year . '-' . $this->month . '-' . $this->day);
        return $date->format('D d F Y');
    }
    public function getFromAddress(){
        $address = json_decode($this->from, true);
        return $address['address'];
    }
    public function getToAddress(){
        $address = json_decode($this->to, true);
        return $address['address'];
    }
}
