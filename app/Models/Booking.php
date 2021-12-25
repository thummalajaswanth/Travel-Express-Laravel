<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';
    protected $fillable = ['trip_name', 'persons', 'price', 'mobile', 'journey_date', 'status', 'trip_id', 'package_id', 'user_id'];
}
