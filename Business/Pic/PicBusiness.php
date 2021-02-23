<?php

namespace Huizhang\Business\Comment;

use Huizhang\Business\BusinessInterface;
use Huizhang\Business\BusinessTrait;
use Huizhang\Business\Singleton;

class PicBusiness implements BusinessInterface
{
    use Singleton;
    use BusinessTrait;

    public function createTask(): bool
    {
        // TODO: Implement createTask() method.
        $params = $this->getParams();

        // TODO:: 各业务方对应的业务逻辑
    }

    public function updateTask(): bool
    {
        // TODO: Implement updateTask() method.
        $params = $this->getParams();

        // TODO:: 各业务方对应的业务逻辑
    }

    public function auditList(): array
    {
        // TODO: Implement auditList() method.
        $params = $this->getParams();

        // TODO:: 各业务方对应的业务逻辑
    }

    public function dispose(): bool
    {
        // TODO: Implement dispose() method.
        $params = $this->getParams();

        // TODO:: 各业务方对应的业务逻辑
    }
}

