<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Healthtranding extends Model
{
    use HasFactory;
    protected $table = 'healthtranding';
    protected $fillable = [
        'companyname', 'productname', 'qnt', 'productprice', 'image'
    ];
}
