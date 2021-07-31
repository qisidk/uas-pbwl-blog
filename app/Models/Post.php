<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";

    protected $primaryKey = "id_post";
    
    protected $fillable = ['judul_post', 'slug_post' , 'text_post', 'tanggal_post'];
}
