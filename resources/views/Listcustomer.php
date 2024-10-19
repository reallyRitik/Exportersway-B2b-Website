<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Listcustomer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'user_id', 'email', 'company_name', 'companydetails','website','companylogo', 'address', 'contact_name', 'city', 'state', 'country', 'zip','mobile', 'gst', 'rank'
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class, 'user_id');
    }   
    public function product()
    {
        return $this->hasMany(Product::class, 'user_id');
    }
    
    public function customers()
    {
        return $this->belongsTo(ListCustomer::class, 'user_id');
    }
   
}
