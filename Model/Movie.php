<?php

class Movie
{
    private int $id;
    private string $title;
    private string $overview;
    private float $vote_average;
    private string $poster_path;

    private string $original_language;



    function __construct($id, $title, $overview, $vote, $image, $language)
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->poster_path = $image;
        $this->original_language = $language;

    }

    public function printCard()
    {
        $image = $this->poster_path;
        $title = $this->title;
        $content = substr($this->overview, 0, 100) . '...';
        $custom = $this->vote_average;
        include __DIR__ . '/../Views/card.php';

    }

}
$movieString = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieString, true);

$movies = [];


foreach ($movieList as $item) {
    $movies[] = new Movie($item['id'], $item['title'], $item['overview'], $item['vote_average'], $item['poster_path'], $item['original_language']);

}
//echo $movies[0]->title;

?>