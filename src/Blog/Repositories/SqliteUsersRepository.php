<?php

namespace Skarsx\CourseProject\Blog\Repositories;

use PDO;
use Skarsx\CourseProject\User\User;
use Skarsx\CourseProject\Blog\UUID;
use Skarsx\CourseProject\Blog\Interfaces\UsersRepositoryInterface;
use Skarsx\CourseProject\Blog\Exceptions\InvalidArgumentException;
use Skarsx\CourseProject\Blog\Exceptions\UserNotFoundException;

class SqliteUsersRepository implements UsersRepositoryInterface
{
    public function __construct(
        private PDO $connection
    )
    {}

    public function save(User $User): void
    { 
            $statement = $this->connection->prepare(
            'INSERT INTO users (uuid, username, first_name, last_name)
            VALUES (:uuid, :username, :first_name, :last_name)'
            );
            
            $statement->execute([
            ':uuid' => $User->getUuid(),
            ':username' => $User->getUsername(),
            ':first_name' => $User->getFirstName(),
            ':last_name' => $User->getLastName(),
            ]);
    }

    private function getUser($statement, $username){
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
        if($result === false){
            throw new UserNotFoundException(
                "Cannot find user: $username"
            );                
        }
    }

    public function getByUUID(UUID $uuid): User
            {
                $statement = $this->connection->prepare(
                'SELECT * FROM users WHERE uuid = :uuid'
                );

                $statement->execute([
                ':uuid' => (string)$uuid,
                ]);

                $result = $statement->fetch(\PDO::FETCH_ASSOC);



                if ($result === false) {
                    throw new UserNotFoundException(
                    "Cannot get user by uuid: $uuid"
                );
                }

                return new User(
                    new UUID($result['uuid']), 
                    $result['username'],
                    $result['first_name'], 
                    $result['last_name']
                );
            }
     public function getByUsername(string $username)
    {
        $statement = $this->connection->prepare('SELECT * FROM users WHERE username == :username');

        $statement->execute([
            ':username' => $username
        ]);

        return $this->getUser($statement, $username);

    }
}