<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Pc extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pc',
        'jenis_id',
    ];

    public $timestamps = false;
    // Scope filter
    public function scopeFilter(Builder $query) : void
    {
        $query->where('id', 'like', '%' . request('search') . '%')
        ->orWhere('nama_pc', 'like', '%' . request('search') . '%');
    }

    public function jenisPc()
    {
        return $this->belongsTo(JenisPc::class, 'jenis_id');
    }
}