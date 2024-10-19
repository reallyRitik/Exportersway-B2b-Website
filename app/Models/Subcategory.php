<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Addcategory;
use App\Models\Subcategorynested;

class subcategory extends Model
{
    use HasFactory;
    // $categories = App\Models\Category::all();
    // $users = User::all();
    protected $table = 'subcategory';
    protected $fillable = [
        'categoryId', 'subcategoryname', 'image'
    ];
    
    public function Subcategorynested()
    {
        return $this->hasMany(Subcategorynested::class,'subcategoryid','id');
    }
    public function category()
    {
        return $this->belongsTo(Addcategory::class);
    }
     public function categorys()
    {
        return $this->belongsTo(Addcategory::class, 'categoryId');
    }
}
