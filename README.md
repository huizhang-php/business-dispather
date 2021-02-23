# business-dispather

<?php
include_once './vendor/autoload.php';

use Huizhang\Business\Config;
use Huizhang\Business\Dispatcher;

// TODO: 模拟请求创建任务接口

$config = Config::getInstance()
    ->setAppId('微博业务方1')
    ->setParams(['创建任务所需参数']);

Dispatcher::getInstance()
    ->setConfig($config)
    ->dispatch()
    ->createTask();
