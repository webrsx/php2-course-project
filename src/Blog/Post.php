<?php
	namespace Skarsx\CourseProject\Blog;

    class Post
    {
     public function __construct(
         private ?int $id = null,
         private ?int $userId = null,
         private ?string $header,
         private ?string $text)
     {}

     public function __toString()
     {
        return " id; ". $this->id . " userid: ". $this->userId . " header: " . $this->header . " text: " . $this->text . PHP_EOL;
    
     }
    }