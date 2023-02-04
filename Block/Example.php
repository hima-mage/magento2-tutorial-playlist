<?php

namespace HimaMage\Example\Block;

use Magento\Framework\View\Element\Template;

class Example extends  Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public  function  subTitle() : string {
        return "This is Second Title";
    }

    public  function welcome() : string {
        return  "Welcome";
    }

    public  function  getNoteHtml() {
        return $this->getLayout()->createBlock(Note::class)->toHtml();
    }

}
