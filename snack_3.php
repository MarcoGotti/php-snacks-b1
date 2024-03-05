<?php
/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. */
$array = [

    '10/01/2019' => [
        [
            'title' => 'La fabbrica di Cioccolato',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'John Doe',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Dampyr',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Dylan Dog',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
/* foreach ($array as $date => $books) {
    var_dump($date);
    foreach ($books as $book) {
        var_dump($book['title'], $book['author'], $book['text']);
    }
} */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayOfArrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Blog</h1>
            <p class="col-md-8 fs-4">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
                Example button
            </button>
        </div>
    </div>

    <div class="container">
        <section>
            <!-- post here -->
            <?php foreach ($array as $date => $books) : ?>
                <h2><?php echo $date ?></h2>

                <?php foreach ($books as $book) { ?>

                    <div class="card mb-3 ">
                        <div class="card-body">
                            <h3><?php echo $book['title'] ?></h3>
                            <p><?php echo $book['text'] ?></p>

                        </div>
                        <div class="card-footer">
                            <p><?php echo $book['author'] ?></p>
                        </div>

                    </div>
                <?php } ?>
            <?php endforeach ?>
        </section>
    </div>




</body>

</html>