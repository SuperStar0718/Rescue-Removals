<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class HomeRemovalsCart extends Model
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
}
