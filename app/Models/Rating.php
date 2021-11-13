<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['Id_Rating', "Wisata_id", "Hasil_Rating"];
    protected $primaryKey = 'Id_Rating';
    use HasFactory;
    
    public function wisata()
    {
        return $this->belongsTo(Wisata::class, "Wisata_id", "Id_Wisata");
    }

}
