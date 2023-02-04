<?php

namespace HimaMage\Example\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class DeliveryMessage implements ArgumentInterface
{
    public function getDeliveryMessage() : string {
        $stock = random_int(1, 10);

        if ($stock < 5) {
            return "hurry it's running out "  . $stock;
        }
        return "this how it will be deliveried";
    }
}
