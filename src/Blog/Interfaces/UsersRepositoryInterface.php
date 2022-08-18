<?php

namespace Skarsx\CourseProject\Blog\Interfaces;
use Skarsx\CourseProject\User\User;
use Skarsx\CourseProject\Blog\UUID;

interface UsersRepositoryInterface
{
    public function save(User $user): void;
    public function getByUUID(UUID $uuid): User;
    public function getByUsername(string $username): User;
}