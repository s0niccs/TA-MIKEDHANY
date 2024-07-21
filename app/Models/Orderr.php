<?php

// app/Models/Orderr.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderr extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'no_telepon', 'kota', 'total_price', 'status',
    ];
}

