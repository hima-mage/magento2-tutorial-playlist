<?php

namespace HimaMage\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Redirect implements  ActionInterface
{

    protected $_redirect;

    public function __construct(\Magento\Framework\Controller\Result\RedirectFactory $redirect)
    {
        $this->_redirect = $redirect;
    }

    public function execute()
    {
        return $this->_redirect->create()->setUrl("/example/index/json");
    }
}
