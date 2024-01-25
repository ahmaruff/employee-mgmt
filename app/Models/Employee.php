<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function salary() : HasOne
    {
        return $this->hasOne(Salary::class);
    }

    public function positions() : BelongsToMany
    {
        return $this->belongsToMany(Position::class);
    }
}
