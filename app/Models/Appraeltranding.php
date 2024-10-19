<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appraeltranding extends Model
{
    use HasFactory;
    protected $table = 'appraeltranding';
    protected $fillable = [
        'companyname', 'productname', 'qnt', 'productprice', 'image'
    ];
}
