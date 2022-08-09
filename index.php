<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'src/user/user.php';
use skarsx\courseproject\User\User;
$user = new User(1);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>user id: <?= $user->getId();?></p>
</body>
</html>