<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class OfficeRemovalsCart extends Model
{
    use HasFactory;
    public function getDateInfo(){
        $date = DateTime::createFromFormat('Y-m-d', $this->year . '-' . $this->month . '-' . $this->day);
        return $date->format('D d F Y');
    }
}
