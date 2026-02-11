<?php

/**
 * INSTRUCTIONS:
 * Create a class named Movie with the following properties:
 * - title
 * - genre
 * - ageRestriction
 * Add a method canWatch($viewerAge) that returns true if $viewerAge is
 * greater than or equal to ageRestriction, otherwise false.
 */
class Movie {
    public function __construct(
        public string $title,
        public string $genre,
        public int $ageRestriction
    ) {
    }   
    public function canWatch(int $viewerAge): bool
    {
        return $viewerAge >= $this->ageRestriction;
    }
}
$movie = new Movie("Avengers", "Action", 16);
$viewerAge = 18;    
if ($movie->canWatch($viewerAge)) {
    echo "You can watch " . $movie->title . ".";
} else {
    echo "You cannot watch " . $movie->title . ".";
}
