<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Menggunakan guarded untuk melindungi kolom id dari mass assignment
    protected $guarded = ['id'];

    // Mendefinisikan relasi ke model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
    