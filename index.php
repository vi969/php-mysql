<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP+MySQL</title>
</head>

<body>
    <h1>PHP+MySQL</h1>

    <?php
    $mysql = new mysqli("localhost", "root", "", "php-mysql");
    $mysql->query("SET NAMES 'utf8' ");

    if ($mysql->connect_error) {
        echo 'Error Number: ' . $mysql->connect_errno . '<br>';
        echo 'Error: ' . $mysql->connect_error;
    }

    $mysql->close();
    ?>
</body>

</html>