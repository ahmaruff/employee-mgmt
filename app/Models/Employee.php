<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'firstname',
        'lastname',
        'date_of_birth',
        'gender',
        'address',
        'division_id'

    ];

    public function division() : BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
