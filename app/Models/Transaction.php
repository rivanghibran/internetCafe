<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pc_id',
        'waktu',
        'jam',
        'waktu_berhenti',
        'total',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the PC model
    public function pc()
    {
        return $this->belongsTo(PC::class);
    }
}