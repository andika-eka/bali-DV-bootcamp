<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ["Id_review", "Wisata_id", "User_id", "Hasil_Review"];
    protected $primaryKey = "Id_review";
    use HasFactory;

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, "Wisata_id", "Id_Wisata");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "User_id", "id");
    }
}
