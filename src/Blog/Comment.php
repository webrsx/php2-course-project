<?php

namespace Skarsx\CourseProject\Blog;

    class Comment
    {
        public function __construct(
        private int $id,
        private int $userId,
        private int $articleId,
        private string $text)
        {}

        public function __tostring(){
            return $this->text . PHP_EOL;
        }
    }
?>