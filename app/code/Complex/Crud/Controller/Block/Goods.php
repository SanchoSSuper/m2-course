<?php


namespace Complex\Crud\Controller\Block;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

class Goods extends \Magento\Framework\App\Action\Action implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private $requestPageFactory;

    public function __construct(Context $context, PageFactory $requestPageFactory)
    {
        parent::__construct($context);
        $this->requestPageFactory = $requestPageFactory;
    }

    public function execute()
    {
        return $this->requestPageFactory->create();
    }
}
