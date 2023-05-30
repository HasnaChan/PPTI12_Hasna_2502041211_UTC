<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");
        for( $i=0; $i<10; $i++){
            Book::create([
                'readingtime_id' => mt_rand(1,3),
                'title' => $faker->word(),
                'description' => $faker->sentence(),
                "author" => $faker->name(),
                "date" => $faker->date(),
                "body" => $faker->paragraph(),
                "image" => $faker->imageUrl(640, 480, 'book_covers', true)
            ]);
        }
    }
}
