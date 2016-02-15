<?php
namespace Steve\Hello\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {
        $this->setMessage('Hello 1.1');
        $this->setName($this->getRequest()->getParam('name'));
    }

    public function getGoodbyeMessage()
    {
        return 'Goodbye World 1.1';
    }
}