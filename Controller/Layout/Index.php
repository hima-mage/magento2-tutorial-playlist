<?php

namespace HimaMage\Example\Controller\Layout;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected  $_page;

    public function __construct(PageFactory $page)
    {
        return $this->_page = $page;
    }

    public function execute()
    {
        return $this->_page->create();
    }
}
