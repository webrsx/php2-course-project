<?php

require_once __DIR__ . '/vendor/autoload.php';


use Skarsx\CourseProject\Blog\{Post, Comment};
use Skarsx\CourseProject\User\User;
use Skarsx\CourseProject\Blog\Repositories\SqliteUsersRepository;
use Skarsx\CourseProject\Blog\Repositories\SqliteCommentsRepository;
use Skarsx\CourseProject\Blog\Repositories\SqlitePostRepository;
use Skarsx\CourseProject\Blog\UUID;


try{

    $connection = new PDO('sqlite:' . __DIR__ . '/test.sqlite');
    $faker = Faker\Factory::create('ru_RU');


    $usersRepository = new SqliteUsersRepository($connection);      
    $postRepository = new SqlitePostRepository($connection);
    $commentsRepository = new SqliteCommentsRepository($connection);

    
    
    // $usersRepository->save(
    //     new User(UUID::random(),
    //     $faker->userName(),
    //     $faker->firstName(),
    //     $faker->lastname()
    //     )
    // );

    // $user1 = $usersRepository->getByUUID(new UUID("beed6963-15b8-448e-8697-18ca464f2b07"));
    
    // $Post = New Post(
    //     UUID::random(),
    //     UUID::random(),
    //     $faker->realText($faker->numberBetween(20, 30)),
    //     $faker->realText($faker->numberBetween(100, 150))
    // );
    
    // $Post2 =  $postRepository->getByUUID(New UUID("82ad2a63-300d-4927-9d61-67495bfa9bf1"));
    // echo $Post2;

    // $postRepository->save(
    //     $Post
    //     );
    
    echo $commentsRepository->getByUUID(new UUID("47a04d86-1460-43a7-b8db-794255dbb6b5"));

    // $commentsRepository->save(new Comment(
    //     UUID::random(),
    //     UUID::random(),
    //     UUID::random(),
    //     $faker->realText($faker->numberBetween(50, 100))
    //     )     
    // );

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

