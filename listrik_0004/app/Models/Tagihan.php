<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = 'tagihan';

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'id_pelanggan');
    }

    protected $guarded = [];

    protected $dates = ['bulan_tahun'];
}
