<?php

namespace Skarsx\CourseProject\Blog\Interfaces;

use Skarsx\CourseProject\Blog\Post;
use Skarsx\CourseProject\Blog\UUID;

interface PostRepositoryInterface
{
    public function save(Post $post);
    public function getByUUID(UUID $uuid);
}