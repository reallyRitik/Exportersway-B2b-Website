<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model  // Capitalized class name
{
    use HasFactory;
    protected $table = 'enquiry';
    protected $fillable = [
        'fname', 'phone', 'email', 'companyname', 'message'
    ];
}

