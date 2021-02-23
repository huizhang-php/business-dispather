<?php
namespace Huizhang\Business;

trait Singleton
{
    private static $instance;

    static public function getInstance(...$args)
    {
        if (!isset(self::$instance)) {
            self::$instance = new static(...$args);
        }
        return self::$instance;
    }
}
