<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'user' => 'user 1',
            'rating' => 'Rating 9/10',
            'date' => '01-01-2024'
        ],
        
        [
            'id' => 2,
            'title' => 'Noragami',
            'user' => 'user 2',
            'rating' => 'Rating 8/10',
            'date' => '02-02-2024'
        ], 
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'user' => 'user 3',
            'rating' => 'Rating 7/10',
            'date' => '03-03-2024'
        ], 

        [
            'id' => 4,
            'title' => 'Kimetsu no Yaiba',
            'user' => 'user 4',
            'rating' => 'Rating 10/10',
            'date' => '04-04-2024'
        ], 

        [
            'id' => 5,
            'title' => 'Tensei Shitara Slime Dattaken',
            'user' => 'user 5',
            'rating' => 'Rating 10/10',
            'date' => '05-05-2024'
        ], 
        
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
