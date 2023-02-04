<?php

namespace HimaMage\Example\Plugin;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\Data\Structure;

class RenderNewCustomer
{

    protected  $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public  function afterGetAttribute(Structure $subject , $result , $elementId, $attribute) {
        if ($this->request->getFullActionName() === 'customer_account_login') {
            if($elementId === 'customer.new' && $attribute === 'remove') {
                return "false";
            }
        }

        return $result;
    }

}
