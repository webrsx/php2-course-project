<?php

namespace Skarsx\CourseProject\Blog;

    class Comment
    {
        public function __construct(
        private string $uuid,
        private string $post_uuid,
        private string $author_uuid,
        private string $text)
        {}

        public function __tostring(){
            return $this->text . PHP_EOL;
        }
    }