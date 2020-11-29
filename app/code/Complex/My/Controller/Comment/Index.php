<?php


namespace Complex\My\Controller\Comment;


use Complex\My\Model\ResourceModel\Com\Collection;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private $resultPageFactory;
    /**
     * @var Collection
     */
    private $collection;

    public function execute()
    {
        return $this->resultPageFactory->create();
    }

    public function __construct(Context $context, PageFactory $resultPageFactory, Collection $collection)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->collection = $collection;
    }

}
