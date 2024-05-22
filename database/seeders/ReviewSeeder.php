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
        Movie::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'user' => 'user 1',
            'rating' => '9/10',
            'date' => '01-01-2024',
        ]);
    
        Movie::create([
            'id' => 2,
            'title' => 'Noragami',
            'user' => 'user 2',
            'rating' => '8/10',
            'date' => '02-02-2024',
        ]);
    
        Movie::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'user' => 'user 3',
            'rating' => '7/10',
            'date' => '03-03-2024',
        ]);
    }
}
