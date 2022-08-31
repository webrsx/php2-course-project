<?php

namespace Skarsx\CourseProject\Blog\Repositories;

use Skarsx\CourseProject\Blog\Comment;
use Skarsx\CourseProject\Blog\Interfaces\CommentsRepositoryInterface;
use Skarsx\CourseProject\Blog\UUID;
use PDO;

class SqliteCommentsRepository implements CommentsRepositoryInterface
{
    public function __construct(
        private PDO $connection
    )
    {}
    public function getByUUID(UUID $uuid)
    {
        $statement = $this->connection->prepare(
            'SELECT * FROM comments WHERE uuid = :uuid'
        );

        $statement->execute([
           ':uuid' => (string)$uuid 
        ]);

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return new Comment(
            new UUID($result['uuid']),
            new UUID($result['post_uuid']),
            new UUID($result['author_uuid']),
            $result['text']
        );
    }

    public function save(Comment $comment)
    {
        $statement = $this->connection->prepare(
            'INSERT INTO comments (uuid, post_uuid, author_uuid, text) VALUES (:uuid, :post_uuid, :author_uuid, :text)'
        );

        $statement->execute([
            ':uuid' => $comment->getUUID(),
            ':post_uuid' => $comment->getPostUUID(),
            ':author_uuid' => $comment->getAuthorUUID(),
            ':text' => $comment->getText()
        ]);
    }
}