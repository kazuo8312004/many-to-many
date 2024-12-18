<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'summary',
        'publication_date',
        'isbn',
        'cover_image',
        'price',
        'pages'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}