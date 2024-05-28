<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'deskription' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
    
        Genre::create([
            'name' => 'Drama',
            'deskription' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
    
        Genre::create([
            'name' => 'School',
            'deskription' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'deskription' => ' The figure of a teenage boy named Tanjiro Kamado who becomes a demon slayer, aka demon killer, after experiencing a traumatic event in the past.',
        ]);

        Genre::create([
            'name' => 'Isekai',
            'deskription' => ' a male office worker named Satoru Mikami who was reincarnated into a slime after being killed by a criminal.',
        ]);
    }
}
