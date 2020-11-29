<?php


namespace Complex\My\Controller\Act;


use Complex\My\Model\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;

class Redirect extends \Magento\Framework\App\Action\Action implements HttpGetActionInterface
{
    /**
     * @var RequestInterface
     */
    private $request;
    /**
     * @var PageFactory
     */
    private $pageFactory;

    public function __construct(
        Context $context,
        RequestInterface $request,
        PageFactory $pageFactory,
        \Magento\Framework\Controller\ResultFactory $resultFactory)
    {
        parent::__construct($context);
        $this->request = $request;
        $this->pageFactory = $pageFactory;
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        /** @var \Complex\My\Model\Page $page */
        $page = $this->pageFactory->create();
        foreach($this->request->getParams() as $key=>$elem) {
            if ($elem == "on") $page->setData($key, 1);
            else $page->setData($key, $elem);
            $page->save();
        }
        $this->_redirect('complex/act/index');
    }
}
