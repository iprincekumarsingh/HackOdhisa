<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    use HasFactory;
    protected $fillable = [
        'hospital_name',
        'address',
        'pincode',
        'contact',
        'alter_no',
        'ownership',
        'verified',
        'code'
    ];
}
