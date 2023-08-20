<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class OrganizerMember extends Model

{
    use HasFactory;
    public function organizers() : BelongsTo{
        return $this->belongsTo(Organize::class);
    }
   
}
