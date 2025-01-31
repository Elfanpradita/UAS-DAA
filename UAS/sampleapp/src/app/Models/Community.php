<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Community extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi
    protected $table = 'schedules';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'day', 
        'start_time', 
        'end_time', 
        'game_theme'
    ];

    // Tentukan kolom yang harus dilindungi dari mass-assignment
    protected $guarded = [];

    // Format waktu untuk `start_time` dan `end_time`
    protected $dates = [
        'start_time', 
        'end_time'
    ];
}
