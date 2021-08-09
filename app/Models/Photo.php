<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = "photo";

    protected $primaryKey = "id_photo";
    
    protected $fillable = ['judul_photo', 'text_photo', 'tanggal_photo'];
}
