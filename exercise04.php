<?php

/**
 * INSTRUCTIONS:
 * Create a class named Article with the following properties:
 * title
 * content
 * Implement a method getSummary($maxLength) that returns the first $maxLength
 * characters of the content, followed by "…" if the content is longer than $maxLength.
 */
class Article {
    public function __construct(
        public string $title,
        public string $content
    ) {
    }   
    public function getSummary(int $maxLength): string
    {
         if (strlen($this->content) <= $maxLength) {
            return $this->content;
        }

        return substr($this->content, 0, $maxLength) . "…";
    }
}
$article = new Article(
    "Call Of Duty: Modern Warfare",
    "Call of Duty: Modern Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. The game was released on October 25, 2019, for Microsoft Windows, PlayStation 4, and Xbox One."
);
echo "Title: " . $article->title . "<br>";
echo "Summary: " . $article->getSummary(50) . "<br>";



?>

