<?php

namespace HimaMage\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Json implements  ActionInterface
{
    protected  $_json;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $json)
    {
        $this->_json = $json;
    }

    public function execute()
    {
        return $this->_json->create()->setHeader("Content-Type" , "application/json")
            ->setData([
                'name' => 'ibrahim',
                'job' => " web developer"
            ]);
    }
}
