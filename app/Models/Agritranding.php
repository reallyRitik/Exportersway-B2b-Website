<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agritranding extends Model
{
    use HasFactory;
    protected $table = 'agritranding';
    protected $fillable = [
        'companyname', 'productname', 'qnt', 'productprice', 'image'
    ];
}
