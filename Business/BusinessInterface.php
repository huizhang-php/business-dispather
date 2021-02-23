<?php

namespace Huizhang\Business;

interface BusinessInterface
{

    /**
     * 创建审核任务
     *
     * @return mixed
     * CreateTime: 2021/2/23 10:24 下午
     */
    public function createTask(): bool;

    /**
     * 更新审核任务
     *
     * @return mixed
     * CreateTime: 2021/2/23 10:24 下午
     */
    public function updateTask(): bool;

    /**
     * 审核列表
     *
     * @return mixed
     * CreateTime: 2021/2/23 10:24 下午
     */
    public function auditList(): array;

    /**
     * 内容处置
     *
     * @return mixed
     * CreateTime: 2021/2/23 10:25 下午
     */
    public function dispose(): bool;

}
