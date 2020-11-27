<?php


namespace Complex\Crud\Block;


use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class My extends Template
{
    public function __construct(Context $context, RequestInterface $request, array $data = [])
    {
        parent::__construct($context, $data);
        $this->$request = $request;
        return $this->pageConfig->getTitle()->set('Search');
    }

    public function getName()
    {
        return 'euguihfiewhfuewgfgwefui';
    }
}
