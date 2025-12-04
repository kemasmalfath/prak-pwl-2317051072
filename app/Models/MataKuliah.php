<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MataKuliah extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'mata_kuliah';

    // Non-aktifkan auto increment karena pakai UUID
    public $incrementing = false;

    // Tentukan tipe kunci
    protected $keyType = 'string';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'nama_mk',
        'sks',
    ];

    // Boot method untuk generate UUID otomatis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = Str::uuid()->toString();
            }
        });
    }
}