<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use willvincent\Rateable\Rating;

class RatingsController extends Controller
{
    public function store(Post $post)
    {
        $rating = new Rating();

        $rating->rating = request('rating');
        $rating->rateable()->associate($post);
        $rating->save();

        return [
            'rating' =>  $post->averageRating ?? 0,
            'count' =>  $post->ratings()->count(),
        ];
    }

    public function show(Post $post) {
        return [
            'rating' => $post->averageRating ?? 0,
            'count' =>  $post->ratings()->count(),
        ];
    }
}
