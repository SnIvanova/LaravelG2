<?php

namespace Database\Seeders;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $authors = Author::factory()->count(10)->create();
        $categories = Category::factory()->count(5)->create();

        $authors->each(function ($author) use ($categories) {
            $author->books()->saveMany(
                Book::factory()->count(rand(3, 8))->make()->each(function ($book) use ($categories) {
                    $book->category_id = $categories->random()->id;
                })
            );
        });
    }
}
