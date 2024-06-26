<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'appointment_date',
        'appointment_time',
        'service_type',
        'notes'
    ];
}
