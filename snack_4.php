<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
$array = [];

while (count($array) < 15) {
    $rdmNum = rand(0, 14);
    if (!in_array($rdmNum, $array)) {
        $array[] = $rdmNum; // due modi per fare la stessa cosa
        //array_push($array, $rdmNum);  
    }
}

var_dump($array);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_rdm_numb</title>
</head>

<body>
    <!-- ?? Non stampa in pagina ?? -->
    <div>ciao</div>
    <?php while (count($array) < 15) :
        $rdmNum = rand(0, 14);
        if (!in_array($rdmNum, $array)) {
            $array[] = $rdmNum; ?>
            <div><?php echo $rdmNum ?></div>


        <?php } ?>
    <?php endwhile; ?>

</body>

</html>