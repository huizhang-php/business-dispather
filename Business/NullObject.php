<?php

namespace Huizhang\Business;

class NullObject implements BusinessInterface
{
    use Singleton;
    use BusinessTrait;

    public function createTask(): bool
    {
        return false;
    }

    public function updateTask(): bool
    {
        return false;
    }

    public function auditList(): array
    {
        return [];
    }

    public function dispose(): bool
    {
        return false;
    }
}

