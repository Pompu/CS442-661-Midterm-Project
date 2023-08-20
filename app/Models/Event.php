<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    use HasFactory;

    public function budget(): HasOne
    {
        return $this->hasOne(Budget::class);
    }
    public function applications(): HasMany {
        return $this->hasMany(Application::class);
    }
    public function organizer() : HasOne{
        return $this->hasOne(Organizer::class);
    }
}
