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
        'user_id', 'email', 'company_name', 'companydetails','website','companylogo', 'address', 'contact_name', 'city', 'state', 'country', 'zip','mobile', 'gst', 'rank', 'points', 'rank_history', 'membership_expiry'
    ];
    protected $casts = [
        'rank_history' => 'array',
    ];
    public function getRankName($rank)
    {
        $rankNames = [
            1 => 'Elite',
            2 => 'PRO',
            3 => 'Growing',
            4 => 'Tetra',
            6 => 'Elite Plus'
        ];

        return $rankNames[$rank] ?? 'unknown';
    }
    
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
        return $this->belongsTo(Listcustomer::class, 'user_id');
    }
   
    
}
