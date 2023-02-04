<?php

namespace HimaMage\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Raw implements  ActionInterface
{
    protected  $_raw;

    public function __construct(\Magento\Framework\Controller\Result\RawFactory $raw)
    {
        $this->_raw = $raw;
    }

    public function execute()
    {
        return $this->_raw->create()->setContents('hello');
    }
}
