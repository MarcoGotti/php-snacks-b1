<?php
/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero nesciunt beatae quas commodi, nihil quaerat nemo impedit, tempore nostrum repudiandae vel accusamus incidunt neque molestiae, perferendis corporis aperiam sequi? Harum commodi assumenda veritatis facilis! Praesentium culpa fuga quisquam. Quas quis sed sint vero nisi porro error ratione nobis, perspiciatis impedit necessitatibus expedita officiis debitis ipsa omnis! Corrupti, quis eveniet. Distinctio sunt delectus explicabo asperiores id quaerat, blanditiis deleniti ipsum dicta eveniet obcaecati ullam repudiandae doloribus corrupti architecto dolor quasi quos possimus et voluptate quidem! Quisquam perspiciatis odio suscipit id tempore!';

$paragraphs = explode('.', $text);
var_dump($paragraphs)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_paragrafs</title>
</head>

<body>

    <?php foreach ($paragraphs as $paragraph) : ?>
        <p><?php echo $paragraph ?></p>
        <p><?= $paragraph ?></p> <!-- scorciatoia 'php echo' -->


    <?php endforeach ?>

</body>

</html>