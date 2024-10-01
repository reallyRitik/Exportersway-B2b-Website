<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machinerytranding extends Model
{
    use HasFactory;

    protected $table = 'machinerytranding';
    protected $fillable = [
        'companyname', 'productname', 'qnt', 'productprice', 'image'
    ];
}
