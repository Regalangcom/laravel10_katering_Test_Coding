<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantModel extends Model
{
    use HasFactory;
    protected $table = 'merchants';
    protected $fillable = [
        'user_id',
        'nama_merchant',
        'alamat',
        'kontak',
        'deskripsi',
    ];

    // Relasi ke Menu
    public function menus()
    {
        return $this->hasMany(MenuModel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function orders()
    {
        return $this->hasManyThrough(Order::class, MenuModel::class);
    }
}
