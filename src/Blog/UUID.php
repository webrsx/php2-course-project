<?php

namespace Skarsx\CourseProject\Blog;
use Skarsx\CourseProject\Blog\Exceptions\InvalidArgumentException;

class UUID
{
    public function __construct(
    private string $uuidString
    ) {
        if (!uuid_is_valid($uuidString)) {
        throw new InvalidArgumentException(
        "Malformed UUID: $this->uuidString"
        );
        }
    }

    public static function random()
    {
        return new self(uuid_create(UUID_TYPE_RANDOM));
    }

    public function __toString()
    {
        return $this->uuidString;
    }
}