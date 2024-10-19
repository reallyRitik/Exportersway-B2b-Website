<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Addcategory;
use App\Models\Listcustomer;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'user_id', 'title', 'details', 'categoryname', 'subcategoryname', 'subnastedcategoryname', 'images','pprice','mqty','pterms','sability','active'
    ];
      
    public function customers()
    {
        return $this->belongsTo(Listcustomer::class, 'user_id');
    }
    

    public function customer()
    {
        return $this->belongsTo(Listcustomer::class, 'user_id');
    }
    
  public function category()
{
    return $this->belongsTo(Addcategory::class, 'categoryname');
}

public function leadlist()
{
    return $this->belongsTo(Leadlist::class, 'title'); // Assuming the foreign key is 'leadlist_id'
}

    
}
