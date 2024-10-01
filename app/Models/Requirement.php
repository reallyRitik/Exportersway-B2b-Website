<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Requirement extends Model
{
    use HasFactory;
    protected $table = 'requirement';
    protected $fillable = [
        'id ', 'products_want', 'full_name', 'email','company','number', 'type'
    ];
}

