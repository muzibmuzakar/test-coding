<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal', 'coa_id', 'desc', 'credit', 'debit'
    ];

    public function coa()
    {
        return $this->belongsTo(Coa::class, 'coa_id');
    }
}
