<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Addcategory;
use App\Models\Subcategory;


class Subcategorynested extends Model
{
    use HasFactory;
    protected $table = 'subnestedcategory';
    protected $fillable = [
        'categoryId','subcategoryid', 'subnestedcategoryname', 'meta_title', 'meta_desc', 'keyword'
    ];
    
     public function subcategory() {
        return $this->belongsTo(Subcategory::class, 'subcategoryid');
    }

    public function category()
    {
        return $this->belongsTo(Addcategory::class, 'categoryId');
    }

}
