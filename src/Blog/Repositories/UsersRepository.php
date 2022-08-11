<?php

namespace Skarsx\CourseProject\Blog\Repositories\UsersRepository;

use Skarsx\CourseProject\User\User;

class SqliteUsersRepository
{
    public function save(User $user): void
    {
        echo "repo user";
    }

}