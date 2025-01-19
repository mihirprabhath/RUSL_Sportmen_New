<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialGB extends Model
{
    use HasFactory;

    protected $table = 'special_gb'; // Explicitly define the table name

    protected $fillable = [
        'booker_name', 
        'contact_number', 
        'date', 
        'time', 
        'place', 
        'sport',
    ];
}
