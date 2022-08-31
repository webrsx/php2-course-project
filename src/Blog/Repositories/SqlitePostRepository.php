<?php

namespace Skarsx\CourseProject\Blog\Repositories;

use PDO;
use Skarsx\CourseProject\Blog\Interfaces\PostRepositoryInterface;
use Skarsx\CourseProject\Blog\Post;
use Skarsx\CourseProject\Blog\UUID;

class SqlitePostRepository implements PostRepositoryInterface
{
    public function __construct(
        private PDO $connection
    )
    {}
    public function save(Post $post)
    {
        $statement = $this->connection->prepare(
            'INSERT INTO posts (uuid, author_uuid, title, text) VALUES (:uuid, :author_uuid, :title, :text)'
        );

        $statement->execute([
            ':uuid' => $post->getUUID(),
            ':author_uuid' => $post->getAuthorUUID(),
            ':title' => $post->getTitle(),
            ':text' => $post->getText()
        ]);

        
    }    

    public function getByUUID(UUID $uuid)
    {
        $statement = $this->connection->prepare(
            'SELECT * FROM posts WHERE uuid = :uuid'
        );

        $statement->execute([
            ':uuid' => (string)$uuid
        ]);

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        return new Post(
            new UUID($result['uuid']),
            new UUID($result['author_uuid']),
            $result['title'],
            $result['text']
        );

    }

}