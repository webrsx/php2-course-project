<?php
	namespace Skarsx\CourseProject\User;

	use Skarsx\CourseProject\Blog\UUID;

	class User
	{
		public function __construct(
			private UUID $uuid,
			private string $username, 
			private string $first_name,
			private string $last_name)
			{}
		
		public function getUUID(){
			return $this->uuid;
		}

		public function getUsername(){
			return $this->username;
		}

		public function getFirstName(){
			return $this->first_name;
		}

		public function getLastName(){
			return $this->last_name;
		}

		public function __toString()
		{
			return $this->uuid;
		}
		
	}
