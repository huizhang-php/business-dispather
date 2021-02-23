<?php

namespace Huizhang\Business;

use Huizhang\Business\Comment\CommentBusiness1;
use Huizhang\Business\Comment\PicBusiness;
use Huizhang\Business\Mblog\MblogBusiness1;
use Huizhang\Business\Mblog\MblogBusiness2;

class Dispatcher
{
    use Singleton;

    /** @var $config Config */
    private $config;

    public function setConfig(Config $config)
    {
        $this->config = $config;
        return $this;
    }

    public function getConfig()
    {
        return $this->config;
    }

    /**
     * 根据appid获取业务对象
     *
     * @return BusinessInterface
     * CreateTime: 2021/2/23 11:27 下午
     */
    public function dispatch()
    {
        $businessObject = new NullObject();
        switch ($this->config->getAppId()) {
            case '微博业务方1':
                $businessObject = new MblogBusiness1();
                break;
            case '微博业务方2':
                $businessObject = new MblogBusiness2();
                break;
            case '评论业务方':
                $businessObject = new CommentBusiness1();
                break;
            case '图片业务方':
                $businessObject = new PicBusiness();
                break;
        }
        // 将请求参数注入到对象中
        $businessObject->setParams($this->getConfig()->getParams());
        return $businessObject;
    }

}

