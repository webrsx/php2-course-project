<?php
	namespace Skarsx\CourseProject\Blog;

    class Post
    {
     public function __construct(
         private string $uuid,
         private string $author_uuid,
         private string $title,
         private string $text)
     {}

     public function __toString()
     {
        return " id; ". $this->id . " userid: ". $this->userId . " header: " . $this->header . " text: " . $this->text . PHP_EOL;
    
     }
    }