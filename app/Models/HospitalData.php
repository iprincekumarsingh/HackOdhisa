<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalData extends Model
{
    use HasFactory;
    protected $fillable = [
        'g_bed', 'icu', 'iccu','mater','apos','bpos','anega','bnega','abposi',
        'abnega','opos','hid','onegative'
    ];
}
