<?php

namespace HimaMage\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface
{

    protected  $_page;

    public function __construct(PageFactory $page)
    {
        $this->_page = $page;
    }

    public function execute()
    {
        $page =  $this->_page->create();
        $page->getConfig()->getTitle()->set("hello on page");
        return $page;
    }
}
