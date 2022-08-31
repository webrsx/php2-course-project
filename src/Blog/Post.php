<?php
	namespace Skarsx\CourseProject\Blog;

    use Skarsx\CourseProject\Blog\UUID;

    class Post
    {
        public function __construct(
            private UUID $uuid,
            private UUID $author_uuid,
            private string $title,
            private string $text)
        {}
        
        public function getUUID(){
            return $this->uuid;
        }

        public function getAuthorUUID(){
            return $this->author_uuid;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getText(){
            return $this->text;
        }

        

        public function __toString()
        {
            return " uuid; ". $this->uuid . " author_uuid: ". $this->author_uuid . " title: " . $this->title . " text: " . $this->text . PHP_EOL;
        
        }
    }