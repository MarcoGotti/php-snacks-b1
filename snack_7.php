<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$alumni = [
    [
        'name' => 'Gigi',
        'lastname' => 'Riva',
        'notes' => [
            6,
            7,
            8,
            7
        ]
    ],
    [
        'name' => 'John',
        'lastname' => 'Gotti',
        'notes' => [
            3,
            4,
            5,
            4
        ]
    ],
    [
        'name' => 'Johnny',
        'lastname' => 'DePosh',
        'notes' => [
            6,
            6,
            5,
            7
        ]
    ],
    [
        'name' => 'Franky',
        'lastname' => 'Rotten',
        'notes' => [
            7,
            8,
            9,
            9
        ]
    ],
];

foreach ($alumni as $kid) {
    var_dump($kid['name'], $kid['lastname']);
    $sum = 0;
    foreach ($kid['notes'] as $note) {
        $sum += $note;
    }
    var_dump($sum / count($kid['notes']));
}

function averageNote($kid)
{
    $sum = 0;
    foreach ($kid['notes'] as $note) {
        $sum += $note;
    }
    return $sum / count($kid['notes']);
}

/* **********FABIO*********************** */
//var_dump(array_sum($alumni[2]['notes']) / count($alumni[2]['notes']));

foreach ($alumni as $kid) {

    echo '<div>';
    echo $kid['name'] . ' ' . $kid['lastname'] . ' | votes avg:' . array_sum($alumni[2]['notes']) / count($alumni[2]['notes']);
    echo '</div>';
    echo '<br>';
}
/* !!!! però non cicla nel 'notes', bensì tiene sempre alumni[2] !!!!!*/
/* ************ENDFABIO******************* */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_alumni</title>
</head>

<body>
    <?php foreach ($alumni as $kid) : ?>
        <div><?php echo $kid['name'] . ' ' . $kid['lastname'] . ';  media voti: ' . averageNote($kid) ?>

        </div>

    <?php endforeach ?>
</body>

</html>