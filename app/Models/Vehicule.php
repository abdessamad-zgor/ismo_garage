<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'fuelType',
        'registration',
        'photos',
        'client_id'
    ];

    
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
