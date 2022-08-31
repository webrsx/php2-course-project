<?php

namespace Skarsx\CourseProject\Blog;

use Skarsx\CourseProject\Blog\UUID;

    class Comment
    {
        public function __construct(
        private UUID $uuid,
        private UUID $postUUID,
        private UUID $authorUUID,
        private string $text)
        {}

        
        public function getUUID()
        {
            return $this->uuid;
        }
        
        public function getPostUUID()
        {
            return $this->postUUID;
        }

        public function getAuthorUUID()
        {
            return $this->authorUUID;
        }

        public function getText()
        {
            return $this->text;
        }
        public function __tostring(){
            return " UUID : " . $this->uuid . " post_uuid: " . $this->postUUID . " authorUUID: " . $this->authorUUID . " txt: " . $this->text . PHP_EOL;
        }
    }