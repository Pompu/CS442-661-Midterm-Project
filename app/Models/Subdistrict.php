<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subdistrict extends Model
{
    use HasFactory;
    public function province(): BelongsTo
    {
        return $this->BelongsTo(District::class);
    }
}
