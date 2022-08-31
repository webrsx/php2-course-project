<?php

namespace Skarsx\CourseProject\Blog\Interfaces;
use Skarsx\CourseProject\Blog\UUID;
use Skarsx\CourseProject\Blog\Comment;

interface CommentsRepositoryInterface

{
    public function getByUUID(UUID $uuid);
    public function save(Comment $comment);
}