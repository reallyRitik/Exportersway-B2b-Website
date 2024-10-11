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
    public function leads()
    {
        return $this->hasManyThrough(Leadlist::class, 'id', 'id', 'lead_ids')
            ->whereIn('id', json_decode($this->lead_ids)); // Decode lead_ids and fetch leads
    }
}
