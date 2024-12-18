<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'bio',
        'birthdate',
        'nationality',
        'website',
        'photo'

       ];

       public function books()
       {
           return $this->belongsToMany(Book::class);
       }
}
