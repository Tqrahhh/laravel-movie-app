<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojo Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
        ],
        
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ], 
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ], 

        [
            'id' => 4,
            'title' => 'Kimetsu no Yaiba',
            'poster' => 'movie-04.jpg',
            'genre' => 'Fantasy',
            'synopsis' => 'The figure of a teenage boy named Tanjiro Kamado who becomes a demon slayer, aka demon killer, after experiencing a traumatic event in the past.'
        ], 

        [
            'id' => 5,
            'title' => 'Tensei Shitara Slime Dattaken',
            'poster' => 'movie-05.jpg',
            'genre' => 'Isekai',
            'synopsis' => 'a male office worker named Satoru Mikami who was reincarnated into a slime after being killed by a criminal.'
        ], 
        
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
 