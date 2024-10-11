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
        // Check if lead_ids is already an array
        $leadIds = is_array($this->lead_ids) ? $this->lead_ids : json_decode($this->lead_ids, true);

        if (is_array($leadIds) && !empty($leadIds)) {
            // Fetch all leads that match the IDs in lead_ids
            return Leadlist::whereIn('id', $leadIds)->get();
        }

        // Return an empty collection if there are no lead IDs
        return collect();
    }
}
