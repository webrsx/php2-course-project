<?php

require_once __DIR__ . '/vendor/autoload.php';


use Skarsx\CourseProject\Blog\{Post, Comment};
use Skarsx\CourseProject\User\User;
use Skarsx\CourseProject\Blog\Repositories\SqliteUsersRepository;
use Skarsx\CourseProject\Blog\UUID;


try{

    $connection = new PDO('sqlite:' . __DIR__ . '/test.sqlite');
    $faker = Faker\Factory::create('ru_RU');


    $usersRepository = new SqliteUsersRepository($connection);
    
    // $usersRepository->save(
    //     new User(UUID::random(),
    //     $faker->userName(),
    //     $faker->firstName(),
    //     $faker->lastname()
    //     )
    // );

    $user1 = $usersRepository->getByUUID(new UUID("beed6963-15b8-448e-8697-18ca464f2b07"));
    print_r($user1);
    
    // switch($argv[1]){
    
    //     case "user":
    //         echo new User($faker->randomDigit(), $faker->name);
    //     break;
    
    //     case "post":
    //         echo new Post
    //         (
    //             $faker->randomDigit(),
    //             $faker->randomDigit(), 
    //             $faker->realText($faker->numberBetween(20, 30)), 
    //             $faker->realText($faker->numberBetween(100, 150))
    //         );
    //     break;
    
    //     case "comment":
    //         echo new Comment
    //         (
    //             $faker->randomDigit(),
    //             $faker->randomDigit(),
    //             $faker->randomDigit(),
    //             $faker->realText($faker->numberBetween(50, 100))
    //         );
    //     break;
    // }

}catch(Exception $exception){
    echo $exception->getMessage();
}

