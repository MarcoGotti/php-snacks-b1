<?php
/* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde */

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

/* foreach ($db as $cathegory => $individuals) {
    var_dump($cathegory);
    foreach ($individuals as $person) {
        var_dump($person['name'], $person['lastname']);
    }
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_teachers_pm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <?php foreach ($db as $category => $list) : ?>
        <div class="<?= $category === 'teachers' ? 'bg-success' : 'bg-secondary' ?>">
            <?php foreach ($list as $employee) : ?>
                <h3><?= $employee['name'] . ' ' . $employee['lastname']; ?></h3>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>


    <div style="border: 2px solid red; display: inline-block">
        <?php foreach ($db['teachers'] as $person) { ?>
            <div><?php echo $person['name'] . ' ' . $person['lastname']; ?></div>
        <?php } ?>
    </div>

    <div style="border: 2px solid blue; display: inline-block;">
        <?php foreach ($db['pm'] as $person) { ?>
            <div><?php echo $person['name'] . ' ' . $person['lastname']; ?></div>
        <?php } ?>
    </div>

</body>

</html>