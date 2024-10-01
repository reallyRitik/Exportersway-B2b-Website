<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;

class Addcategory extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'name'
    ];
   
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'categoryId');
    }
}
