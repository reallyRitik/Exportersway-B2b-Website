<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadlist extends Model
{
    use HasFactory;
    protected $table = 'leads';
    protected $fillable = [
        'title', 'name', 'mobile', 'company_name','city','qty', 'unit', 'country', 'message', 'email'
    ];
    
     public function products()
    {
        return $this->hasMany(Product::class, 'title'); // Assuming there's a foreign key 'leadlist_id' in the products table
    }
}   
