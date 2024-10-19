<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadView extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'lead_id', 'view_date'];
}
