<?php
//------------------------------------------------------------------
$films = [
    [
        'title' => 'Toy Story',
        'director' => 'John Lasseter',
        'plot' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet velit placeat adipisci, similique atque magnam voluptatibus, quae error perspiciatis, magni in aspernatur recusandae explicabo quis esse ut doloribus ea? Nihil.',
    ],
    [
        'title' => 'Soul',
        'director' => 'Pete Docter',
        'plot' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet velit placeat adipisci, similique atque magnam voluptatibus, quae error perspiciatis, magni in aspernatur recusandae explicabo quis esse ut doloribus ea? Nihil.',
    ]
];
//------------------------------------------------------------------

//------------------------------------------------------------------
class Movie
{
    public $title;
    public $director;
    public $plot;

    public function __construct($_title, $_director, $_plot)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->plot = $_plot;
    }

    public function getMovieAbstract($max=50)
    {
        return substr($this->plot, 0, $max) . '...';
    }
}

$movies=[];
foreach($films as $film){
    $movie = new Movie($film['title'], $film['director'], $film['plot']);
    $movies[] = $movie;
};
//------------------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Movies</h1>
    <div class="movie">
        <?php foreach($movies as $movie): ?>
            <h2><?= $movie->title ?></h2>
            <h5><i>directed by <?= $movie->director ?></i></h4>
            <p><?= $movie->plot ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>