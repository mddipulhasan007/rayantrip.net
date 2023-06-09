<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'form_data'; // Replace with your actual table name
    protected $fillable = ['from_city', 'from_city_short_apt_name', 'to_city', 'to_city_short_apt_name', 'dept_date_from', 'trav_count', 'fare_type', 'package', 'total_price'];
    // Add any additional fields or relationships as needed
}