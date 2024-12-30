<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Coin extends Model
{
    use HasFactory;

    protected $fillable = [
                            'user_id', 
                            'name', 
                            'coin'
                        ];
        public function scopeFilter(Builder $query) : void
    {
        $query->where('user_id', 'like', '%' . request('search') . '%')
        ->orWhere('name', 'like', '%' . request('search') . '%');
    }
}
