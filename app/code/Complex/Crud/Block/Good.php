<?php


namespace Complex\Crud\Block;


use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Good extends Template
{
    public function __construct(Context $context, RequestInterface $request, array $data = [])
    {
        parent::__construct($context, $data);
        $this->$request = $request;
        return $this->pageConfig->getTitle()->set('Пошук');
    }

    public function getName()
    {
        return 'jiegfwghfewjfewigfwueihfiwe';
    }

    public function setName()
    {
        return 'Hello';
    }
}
