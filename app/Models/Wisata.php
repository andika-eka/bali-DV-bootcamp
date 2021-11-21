<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = ['Id_Wisata', "Nama_Wisata","Deskripsi", "User_id", "Foto", "Lokasi" ];
    protected $primaryKey = 'Id_Wisata';
    use HasFactory;

    public function review()
    {
        return $this->hasMany(Review::class, "Wisata_id", "Id_Wisata");
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, "Wisata_id", "Id_Wisata");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "User_id", "id");
    }
}
