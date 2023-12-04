<?php

class Movie
{
    public int $id;
    public string $title;
    public string $poster_path;
    public string $overview;
    public string $original_language;
    public float $vote_average;


    function __construct($id, $title, $image, $overview, $language, $vote)
    {
        $this->id = $id;
        $this->title = $title;
        $this->poster_path = $image;
        $this->overview = $overview;
        $this->original_language = $language;
        $this->vote_average = $vote;
    }

    public function printCard()
    {
        $image = $this->poster_path;
        $title = $this->title;
        $overview = $this->overview;
        $language = $this->original_language;
        $vote = $this->vote_average;

    }

}
$movieString = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieString, true);

$movies = [];


foreach ($movieList as $item) {
    $movies[] = new Movie($item['id'], $item['title'], $item['overview'], $item['vote_average'], $item['poster_path'], $item['original_language']);
}

?>



<div>
    <h2>CIAO SONO IL MOVIE</h2>
</div>