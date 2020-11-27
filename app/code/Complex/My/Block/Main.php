<?php


namespace Complex\My\Block;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Main extends Template
{
    public function __construct(Template\Context $context, RequestInterface $request, array $data = [])
    {
        parent::__construct($context, $data);
        $this->$request = $request;
        return $this->pageConfig->getTitle()->set('Action');
    }

    public function getName()
    {
        return 'fjuegfewgfheufh';
    }
}
