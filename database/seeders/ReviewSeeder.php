<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => 1,
            'user' => 'user 1',
            'rating' => '9/10',
            'date' => '01-01-2024',
        ]);
    
        Review::create([
            'id' => 2,
            'movie_id' => 2,
            'user' => 'user 2',
            'rating' => '8/10',
            'date' => '02-02-2024',
        ]);
    
        Review::create([
            'id' => 3,
            'movie_id' => 3,
            'user' => 'user 3',
            'rating' => '7/10',
            'date' => '03-03-2024',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => 4,
            'user' => 'user 4',
            'rating' => '10/10',
            'date' => '04-04-2024',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => 5,
            'user' => 'user 5',
            'rating' => '10/10',
            'date' => '05-05-2024',
        ]);
    }
}
