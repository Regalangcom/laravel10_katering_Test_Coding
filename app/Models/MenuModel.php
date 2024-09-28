<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'merchant_id',
        'gambar'
    ];

    // Relasi ke Merchant
    public function merchants()
    {
        // return $this->belongsTo(MerchantModel::class);
        return $this->belongsTo(MerchantModel::class, 'merchant_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
