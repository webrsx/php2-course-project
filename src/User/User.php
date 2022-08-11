<?php
	namespace Skarsx\CourseProject\User;

	class User
	{
		public function __construct(
			private ?int $id = null, 
			private ?string $name = null, 
			private ?string $surname = null)
			{}
		
		public function __toString()
		{
			return $this->id . " " . $this->name . $this->surname . PHP_EOL;
		}
	}
?>