<?php
/* Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$teams = [
    [
        'home_team' => 'virtus',
        'guest_team' => 'fortitudo',
        'home_team_score' => rand(1, 100),
        'guest_team_score' => rand(1, 100),
    ],
    [
        'home_team' => 'virtus2',
        'guest_team' => 'fortitudo2',
        'home_team_score' => rand(1, 100),
        'guest_team_score' => rand(1, 100),
    ],
    [
        'home_team' => 'virtus3',
        'guest_team' => 'fortitudo3',
        'home_team_score' => rand(1, 100),
        'guest_team_score' => rand(1, 100),
    ],
    [
        'home_team' => 'virtus4',
        'guest_team' => 'fortitudo4',
        'home_team_score' => rand(1, 100),
        'guest_team_score' => rand(1, 100),
    ],
];

$var = 'only a try';

/* foreach ($teams as $team) {
    var_dump($team);
    echo '<br>';
    echo $team['home_team'];
    echo '<br>';
    echo $team['guest_team'];
    echo '<br>';

    echo $team['home_team'] . ' - ' . $team['guest_team'] . ' | ' . $team['home_team_score'] . ' - ' . $team['guest_team_score'];
    echo '<br>';
} */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack basket</title>
</head>

<body>

    <?php foreach ($teams as $team) { ?>

        <div><?php echo $team['home_team'] . ' - ' . $team['guest_team'] . ' | ' . $team['home_team_score'] . ' - ' . $team['guest_team_score'] ?></div>

    <?php } ?>



    <?php foreach ($teams as $team) : ?>

        <p>
            <span><?php echo $team['home_team'] ?></span>-
            <span><?php echo $team['guest_team'] ?> | </span>

            <span><?php echo $team['home_team_score'] ?></span>-
            <span><?php echo $team['guest_team_score'] ?></span>
        </p>

    <?php endforeach; ?>


    <?php if (4 > 2) : ?>
        <div><?php echo $var ?></div>
    <?php endif ?>

    <?php if (4 > 2) : ?>
        <div><?php echo $var ?></div>
    <?php elseif (condition) : ?>
        <!-- code here -->
    <?php endif; ?>

</body>

</html>