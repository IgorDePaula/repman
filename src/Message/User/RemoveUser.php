<?php

declare(strict_types=1);

namespace Buddy\Repman\Message\User;

final class RemoveUser
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }
}
