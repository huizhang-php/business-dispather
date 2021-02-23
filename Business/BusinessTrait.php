<?php

namespace Huizhang\Business;

trait BusinessTrait {

    private $params;

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function getParams() {
        return $this->params;
    }
}
