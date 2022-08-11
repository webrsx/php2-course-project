<?php
	namespace Skarsx\CourseProject\User;

	class User
	{
		public function __construct(
			private string $uuid, 
			private string $username, 
			private string $first_name,
			private string $last_name)
			{}
		
		public function __toString()
		{
			return $this->id . " " . $this->name . $this->surname . PHP_EOL;
		}
	}
?>