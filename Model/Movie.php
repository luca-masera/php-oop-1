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


}

?>



<div>
    <h2>CIAO SONO IL MOVIE</h2>
</div>