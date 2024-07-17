<?php 

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'published' => 1968,
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'published' => 2021,
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'published' => 2011,
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com'
    ],
];

$movies = [
    [
        'title' => 'The Avengers',
        'release' => 2012,
        'director' => 'Joss Whedon',
        'writer' => ['Joss Whedon']
    ],
    [
        'title' => 'Toy Story',
        'release' => 1995,
        'director' => 'John Lasseter',
        'writer' => ['Joss Whedon', 'Andrew Stanton', 'Joel Cohen', 'Alec Sokolow']
    ],
    [
        'title' => 'Inglourious Basterds',
        'release' => 2009,
        'director' => 'Quentin Tarantino',
        'writer' => ['Quentin Tarantino']
    ]
];

function filter($items, $fn) {
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
};

$filteredBooks = array_filter($books, function ($book) {
    return $book['published'] >= 1950 && $book['published'] <= 2020;
});

function filterMovieByYear($movies, $year) {
    $filteredMoviesYear = [];

    foreach ($movies as $movie) {
        if ($movie['release'] >= $year) {
            $filteredMoviesYear[] = $movie;
        }
    }

    return $filteredMoviesYear;
}

$filteredMovies = array_filter($movies, function ($movie) {
    return $movie['release'] >= 2000;
});

function filterMovieByWriter($movies, $writer) {
    $filteredMoviesWriter = [];

    foreach ($movies as $movie) {
        foreach ($movie['writer'] as $writers) {
            if ($writers === $writer) {
                $filteredMoviesWriter[] = $movie;
            }
        }
    }

    return $filteredMoviesWriter;
}

$filteredWriter = array_filter($movies, function ($movie) {
    return in_array('Joss Whedon', $movie['writer']);
});

require "index.view.php";