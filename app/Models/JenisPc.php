<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPc extends Model
{
    use HasFactory;

    protected $fillable = ['jenis', 'harga']; 

    public function pcs()
    {
        return $this->hasMany(Pc::class, 'jenis_id'); 
    }
}