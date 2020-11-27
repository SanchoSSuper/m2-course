<?php

namespace Complex\Crud\Block;


use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\RequestInterface;

class Main extends Template
{
    public function __construct(Context $context, RequestInterface $request, array $data = [])
    {
        parent::__construct($context, $data);
        $this->$request = $request;
        return $this->pageConfig->getTitle()->set('Poshuk');
    }

    public function getName()
    {
        return '.dnijehvreihreivreivhreu';
    }
}
