<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function test_the_main_page_shows_correct_info(): void
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/genre/movie/list' => $this->fakeGenres(),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();

        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');

        $response->assertSee('Now Playing');
        $response->assertSee('Now Playing Fake Movie');

        $response->assertSee('Action');
        $response->assertSee('Comedy');
        $response->assertSee('Science Fiction');
    }

    private function fakePopularMovies()
    {
        return Http::response([
            'results' => [
                [
                    "adult" => false,
                    "backdrop_path" => "/yDHYTfA3R0jFYba16jBB1ef8oIt.jpg",
                    "genre_ids" => [
                        28,
                        35,
                        878,
                    ],
                    "id" => 533535,
                    "original_language" => "en",
                    "original_title" => "Fake Movie",
                    "overview" => "Fake movie overview",
                    "popularity" => 7253.796,
                    "poster_path" => "/8cdWjvZQUExUUTzyp4t6EDMubfO.jpg",
                    "release_date" => "2024-07-24",
                    "title" => "Fake Movie",
                    "video" => false,
                    "vote_average" => 7.783,
                    "vote_count" => 2122,
                ]
            ]
        ], 200);
    }

    private function fakeNowPlayingMovies()
    {
        return Http::response([
            'results' => [
                [
                    "adult" => false,
                    "backdrop_path" => "/yDHYTfA3R0jFYba16jBB1ef8oIt.jpg",
                    "genre_ids" => [
                        28,
                        35,
                        878
                    ],
                    "id" => 533535,
                    "original_language" => "en",
                    "original_title" => "Now Playing Fake Movie",
                    "overview" => "A listless Wade Wilson toils away in civilian life with his days as the morally flexible mercenary, Deadpool, behind him. But when his homeworld faces an existential threat, Wade must reluctantly suit-up again with an even more reluctant Wolverine.",
                    "popularity" => 7253.796,
                    "poster_path" => "/8cdWjvZQUExUUTzyp4t6EDMubfO.jpg",
                    "release_date" => "2024-07-24",
                    "title" => "Now Playing Fake Movie",
                    "video" => false,
                    "vote_average" => 7.778,
                    "vote_count" => 2136
                ]
            ]
        ], 200);
    }

    private function fakeGenres()
    {
        return Http::response([
            'genres' => [
                [ "id" => 28, "name" => "Action" ],
                [ "id" => 35, "name" => "Comedy" ],
                [ "id" => 878, "name" => "Science Fiction" ],
            ]
        ], 200);
    }
}
