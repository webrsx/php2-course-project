<?php

require_once __DIR__ . '/vendor/autoload.php';

use Skarsx\CourseProject\Blog\{Post, Comment};
use Skarsx\CourseProject\Console\ConsoleInput;
use Skarsx\CourseProject\User\User;
$faker = Faker\Factory::create('ru_RU');

switch($argv[1]){

    case "user":
        echo new User($faker->randomDigit(), $faker->name);
    break;

    case "post":
        echo new Post(
        $faker->randomDigit(),
        $faker->randomDigit(),
        $faker->realText($faker->numberBetween(20, 30)), 
        $faker->realText($faker->numberBetween(100, 150)));
    break;

    case "comment":
        echo new Comment(
        $faker->randomDigit(),
        $faker->randomDigit(),
        $faker->randomDigit(),
        $faker->realText($faker->numberBetween(50, 100)));
    break;

    $connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');
    $connection->exec(
    "INSERT INTO table_name (first_name, last_namee) VALUES ('jenya', 'koshkin')"
);
}
?>