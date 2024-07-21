<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'product_id',
        'jumlah', 
        'nama', 
        'alamat', 
        'no_telepon', 
        'kota', 
        'total_price', 
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function testimonis()
    {
        return $this->hasMany(Testimoni::class);
    }
}
