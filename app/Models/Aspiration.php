<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pengirim',
        'email_pengirim',
        'subjek',
        'pesan',
        'status',
    ];
}
