<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'genre' => $this->faker->word,
            'summary' => $this->faker->paragraph,
            'publication_date' => $this->faker->date,
            'isbn' => $this->faker->isbn13,
            'cover_image' => $this->faker->imageUrl(100, 150, 'books'),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'pages' => $this->faker->numberBetween(100, 1000),
        ];
    }
}