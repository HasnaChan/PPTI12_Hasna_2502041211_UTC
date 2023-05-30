<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\ReadingTime;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create("id_ID");
        $readingTimes = ReadingTime::pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            $body = $faker->paragraphs(5, true);
            $readingTimeId = $this->getReadingTimeId($body, $readingTimes);

            Book::create([
                'readingtime_id' => $readingTimeId,
                'title' => $faker->sentence(),
                'description' => $faker->sentence(),
                'author' => $faker->name(),
                'date' => $faker->date(),
                'body' => $body,
                'image' => $faker->imageUrl(640, 480, 'book_covers', true)
            ]);
        }
    }

    private function getReadingTimeId($body, $readingTimes)
    {
        $wordCount = str_word_count($body);
        if ($wordCount < 10) {
            return $readingTimes[0]; // Quick Reads
        } elseif ($wordCount >= 10 && $wordCount < 15) {
            return $readingTimes[1]; // Medium Reads
        } else {
            return $readingTimes[2]; // Long Reads
        }
    }
}
