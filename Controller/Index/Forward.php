<?php

namespace HimaMage\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Forward implements  ActionInterface
{
    protected  $_forward;

    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forward)
    {
        $this->_forward = $forward;
    }

    public function execute()
    {
         return $this->_forward->create()->forward("index");
    }
}
