<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function test_the_movies_page_shows_correct_info(): void
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

    public function test_the_movie_page_shows_the_correct_info(): void
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/*' => $this->fakeSingleMovie(),
        ]);

        $response = $this->get(route('movies.show', 533535));

        $response->assertSuccessful();

        $response->assertSee('Deadpool & Wolverine');
        $response->assertSee('A listless Wade Wilson toils away in civilian life with his days as the morally flexible mercenary, Deadpool, behind him. But when his homeworld faces an existential threat, Wade must reluctantly suit-up again with an even more reluctant Wolverine.');
        $response->assertSee('Ryan Reynolds');
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

    private function fakeSingleMovie()
    {
        return Http::response(
            [
                "adult" => false,
                "backdrop_path" => "/yDHYTfA3R0jFYba16jBB1ef8oIt.jpg",
                "belongs_to_collection" => [
                    "id" => 448150,
                    "name" => "Deadpool Collection",
                    "poster_path" => "/30c5jO7YEXuF8KiWXLg9m28GWDA.jpg",
                    "backdrop_path" => "/hBQOWY8qWXJVFAc8yLTh1teIu43.jpg",
                ],
                "budget" => 200000000,
                "genres" => [
                    [
                        "id" => 28,
                        "name" => "Action",
                    ],
                    [
                        "id" => 35,
                        "name" => "Comedy",
                    ],
                    [
                        "id" => 878,
                        "name" => "Science Fiction",
                    ],
                ],
                "homepage" => "https://www.marvel.com/movies/deadpool-and-wolverine",
                "id" => 533535,
                "imdb_id" => "tt6263850",
                "origin_country" => ["US"],
                "original_language" => "en",
                "original_title" => "Deadpool & Wolverine",
                "overview" =>
                    "A listless Wade Wilson toils away in civilian life with his days as the morally flexible mercenary, Deadpool, behind him. But when his homeworld faces an existential threat, Wade must reluctantly suit-up again with an even more reluctant Wolverine.",
                "popularity" => 7253.796,
                "poster_path" => "/8cdWjvZQUExUUTzyp4t6EDMubfO.jpg",
                "production_companies" => [
                    [
                        "id" => 420,
                        "logo_path" => "/hUzeosd33nzE5MCNsZxCGEKTXaQ.png",
                        "name" => "Marvel Studios",
                        "origin_country" => "US",
                    ],
                    [
                        "id" => 104228,
                        "logo_path" => "/hx0C1XcSxGgat8N62GpxoJGTkCk.png",
                        "name" => "Maximum Effort",
                        "origin_country" => "US",
                    ],
                    [
                        "id" => 2575,
                        "logo_path" => "/9YJrHYlcfHtwtulkFMAies3aFEl.png",
                        "name" => "21 Laps Entertainment",
                        "origin_country" => "US",
                    ],
                    [
                        "id" => 127928,
                        "logo_path" => "/h0rjX5vjW5r8yEnUBStFarjcLT4.png",
                        "name" => "20th Century Studios",
                        "origin_country" => "US",
                    ],
                    [
                        "id" => 176762,
                        "logo_path" => null,
                        "name" => "Kevin Feige Productions",
                        "origin_country" => "US",
                    ],
                    [
                        "id" => 22213,
                        "logo_path" => "/qx9K6bFWJupwde0xQDwOvXkOaL8.png",
                        "name" => "TSG Entertainment",
                        "origin_country" => "US",
                    ],
                ],
                "production_countries" => [
                    [
                        "iso_3166_1" => "US",
                        "name" => "United States of America",
                    ],
                ],
                "release_date" => "2024-07-24",
                "revenue" => 1142616895,
                "runtime" => 128,
                "spoken_languages" => [
                    [
                        "english_name" => "English",
                        "iso_639_1" => "en",
                        "name" => "English",
                    ],
                ],
                "status" => "Released",
                "tagline" => "Come together.",
                "title" => "Deadpool & Wolverine",
                "video" => false,
                "vote_average" => 7.781,
                "vote_count" => 2133,
                "credits" => [
                    "cast" => [
                        [
                            "adult" => false,
                            "gender" => 2,
                            "id" => 10859,
                            "known_for_department" => "Acting",
                            "name" => "Ryan Reynolds",
                            "original_name" => "Ryan Reynolds",
                            "popularity" => 109.827,
                            "profile_path" => "/2Orm6l3z3zukF1q0AgIOUqvwLeB.jpg",
                            "cast_id" => 252,
                            "character" => "Wade Wilson / Deadpool / Nicepool",
                            "credit_id" => "66a0eeb7fadd7c4c9c38207f",
                            "order" => 0,
                        ],
                        [
                            "adult" => false,
                            "gender" => 2,
                            "id" => 6968,
                            "known_for_department" => "Acting",
                            "name" => "Hugh Jackman",
                            "original_name" => "Hugh Jackman",
                            "popularity" => 78.08,
                            "profile_path" => "/4Xujtewxqt6aU0Y81tsS9gkjizk.jpg",
                            "cast_id" => 253,
                            "character" => "Logan / Wolverine",
                            "credit_id" => "66a0eef54192f70fea09dc90",
                            "order" => 1,
                        ],
                        [
                            "adult" => false,
                            "gender" => 3,
                            "id" => 2324569,
                            "known_for_department" => "Acting",
                            "name" => "Emma Corrin",
                            "original_name" => "Emma Corrin",
                            "popularity" => 55.074,
                            "profile_path" => "/wqGOVOsHzZaHeHymIS40elGCnY0.jpg",
                            "cast_id" => 254,
                            "character" => "Cassandra Nova",
                            "credit_id" => "66a0ef1ca5ab9d9f3d705ed1",
                            "order" => 2,
                        ],
                        [
                            "adult" => false,
                            "gender" => 2,
                            "id" => 15576,
                            "known_for_department" => "Acting",
                            "name" => "Matthew Macfadyen",
                            "original_name" => "Matthew Macfadyen",
                            "popularity" => 22.749,
                            "profile_path" => "/2FF3Yjxd7DYR4EIJL6s2GpKDMkJ.jpg",
                            "cast_id" => 256,
                            "character" => "Mr. Paradox",
                            "credit_id" => "66a0ef54aab1abca4f09e107",
                            "order" => 3,
                        ],
                        [
                            "adult" => false,
                            "gender" => 1,
                            "id" => 1464650,
                            "known_for_department" => "Acting",
                            "name" => "Dafne Keen",
                            "original_name" => "Dafne Keen",
                            "popularity" => 49.114,
                            "profile_path" => "/g325OIjIHrFr0te8ewPfhKQ2SKj.jpg",
                            "cast_id" => 271,
                            "character" => "Laura / X-23",
                            "credit_id" => "66a0f13d76eb26a1ca381cc0",
                            "order" => 4,
                        ],
                        [
                            "adult" => false,
                            "gender" => 2,
                            "id" => 15277,
                            "known_for_department" => "Acting",
                            "name" => "Jon Favreau",
                            "original_name" => "Jon Favreau",
                            "popularity" => 30.901,
                            "profile_path" => "/tnx7iMVydPQXGOoLsxXl84PXtbA.jpg",
                            "cast_id" => 278,
                            "character" => "Happy Hogan",
                            "credit_id" => "66a0f232a9212776c5e0d638",
                            "order" => 5,
                        ],
                        [
                            "adult" => false,
                            "gender" => 1,
                            "id" => 54882,
                            "known_for_department" => "Acting",
                            "name" => "Morena Baccarin",
                            "original_name" => "Morena Baccarin",
                            "popularity" => 73.961,
                            "profile_path" => "/6Z59BjoTiGAbGb19lYwrb9FOjkV.jpg",
                            "cast_id" => 255,
                            "character" => "Vanessa",
                            "credit_id" => "66a0ef353e68414965705f0c",
                            "order" => 6,
                        ],
                        [
                            "adult" => false,
                            "gender" => 2,
                            "id" => 1091324,
                            "known_for_department" => "Acting",
                            "name" => "Rob Delaney",
                            "original_name" => "Rob Delaney",
                            "popularity" => 22.727,
                            "profile_path" => "/xirfT1znRkkughLiPemKu3NhkKQ.jpg",
                            "cast_id" => 261,
                            "character" => "Peter",
                            "credit_id" => "66a0f01b537cac04b109e17e",
                            "order" => 7,
                        ],
                        [
                            "adult" => false,
                            "gender" => 1,
                            "id" => 122750,
                            "known_for_department" => "Acting",
                            "name" => "Leslie Uggams",
                            "original_name" => "Leslie Uggams",
                            "popularity" => 25.065,
                            "profile_path" => "/peLaqLcs3y2WY4TbrLOXQGt9I8S.jpg",
                            "cast_id" => 259,
                            "character" => "Blind Al",
                            "credit_id" => "66a0efdb073923ad4918be52",
                            "order" => 8,
                        ],
                        [
                            "adult" => false,
                            "gender" => 1,
                            "id" => 9278,
                            "known_for_department" => "Acting",
                            "name" => "Jennifer Garner",
                            "original_name" => "Jennifer Garner",
                            "popularity" => 50.817,
                            "profile_path" => "/ftymEXqdTnXfaI6dGd9qrJoFOSE.jpg",
                            "cast_id" => 258,
                            "character" => "Elektra",
                            "credit_id" => "66a0efbef3ce01f00535f865",
                            "order" => 9,
                        ],
                    ],
                    "crew" => [
                        [
                            "adult" => false,
                            "gender" => 2,
                            "id" => 934844,
                            "known_for_department" => "Writing",
                            "name" => "Rob Liefeld",
                            "original_name" => "Rob Liefeld",
                            "popularity" => 7.56,
                            "profile_path" => "/2WF4E4afbS2nCUNV3ksTGdouyvf.jpg",
                            "credit_id" => "5be4ba26c3a36810d20360c5",
                            "department" => "Writing",
                            "job" => "Characters",
                        ],
                        [
                            "adult" => false,
                            "gender" => 2,
                            "id" => 1222480,
                            "known_for_department" => "Writing",
                            "name" => "Fabian Nicieza",
                            "original_name" => "Fabian Nicieza",
                            "popularity" => 5.519,
                            "profile_path" => "/vV0VKVThe1o6fyS6SCRAlVNVdLX.jpg",
                            "credit_id" => "5be4ba01c3a36810d20360b3",
                            "department" => "Writing",
                            "job" => "Characters",
                        ],
                    ],
                ],
                "videos" => [
                    "results" => [
                        [
                            "iso_639_1" => "en",
                            "iso_3166_1" => "US",
                            "name" => "Thank You",
                            "key" => "hiGPEYgOdOs",
                            "site" => "YouTube",
                            "size" => 1080,
                            "type" => "Featurette",
                            "official" => true,
                            "published_at" => "2024-08-16T20:03:13.000Z",
                            "id" => "66c14b36150d42be109dd68b",
                        ],
                    ],
                ],
                "images" => [
                    "backdrops" => [
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/yDHYTfA3R0jFYba16jBB1ef8oIt.jpg",
                            "vote_average" => 5.456,
                            "vote_count" => 9,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/dvBCdCohwWbsP5qAaglOXagDMtk.jpg",
                            "vote_average" => 5.404,
                            "vote_count" => 20,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/cOoVcVQ3i1m5b2xtqKBtoTSbxC1.jpg",
                            "vote_average" => 5.398,
                            "vote_count" => 14,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/9l1eZiJHmhr5jIlthMdJN5WYoff.jpg",
                            "vote_average" => 5.398,
                            "vote_count" => 14,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/lXJ9BtyseV8nHulgUPGkj1cLKw4.jpg",
                            "vote_average" => 5.39,
                            "vote_count" => 6,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/waPt1Dv5kWhbNna5rTv2NGfeb7O.jpg",
                            "vote_average" => 5.388,
                            "vote_count" => 4,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/cnlbeXo2uBDtu4VdiSgjmMLf06s.jpg",
                            "vote_average" => 5.388,
                            "vote_count" => 4,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/qPiMT4rtHMMxvcsTbAT3KSRuGa3.jpg",
                            "vote_average" => 5.388,
                            "vote_count" => 4,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/nU5NrhR5VUedB0UIcKdDpOkTnna.jpg",
                            "vote_average" => 5.388,
                            "vote_count" => 4,
                            "width" => 3840,
                        ],
                        [
                            "aspect_ratio" => 1.778,
                            "height" => 2160,
                            "iso_639_1" => null,
                            "file_path" => "/uR7kX3oMmnA83ckoev7FBi7rP5S.jpg",
                            "vote_average" => 5.388,
                            "vote_count" => 4,
                            "width" => 3840,
                        ],
                    ],
                    "logos" => [],
                    "posters" => [],
                ],
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
