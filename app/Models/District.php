<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class District extends Model
{
    use HasFactory;
    public function province(): BelongsTo
    {
        return $this->BelongsTo(Province::class);
    }
    public function subdistrict(): HasOne
    {
        return $this->HasOne(Subdistrict::class);
    }
}
