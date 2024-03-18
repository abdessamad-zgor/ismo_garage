<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'status',
        'startDate',   
        'endDate',
        'mechanicNote',
        'clientNotes',
        'employee_id',
        'vehicule_id'
    ];


    public function employee(): BelongsTo
    {
        return $this->belongsTo(employee::class);
    }

    public function vehicule(): BelongsTo
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function invoice(): hasOne 
    {
        return $this->hasOne(Invoice::class);
    }
}