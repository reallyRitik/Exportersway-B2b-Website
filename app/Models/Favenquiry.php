<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favenquiry extends Model
{
    use HasFactory;
    protected $table = 'favenquiry';
    protected $fillable = [
        'user_id', 'lead_ids'
    ];

    protected $casts = [
        'lead_ids' => 'array', // Cast lead_ids as an array
    ];
}
