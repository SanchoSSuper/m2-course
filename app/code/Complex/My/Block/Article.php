<?php


namespace Complex\My\Block;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Complex\My\Helper\Data;
use Complex\My\Model\PageFactory;
class Article extends Template
{
    /**
     * @var RequestInterface
     */
    private $request;
    /**
     * @var PageFactory
     */
    private $pageFactory;
    /**
     * @var Data
     */
    private $helper;

    public function __construct(Context $context, RequestInterface $request, PageFactory $pageFactory, Data $helper , array $data = [])
    {
        parent::__construct($context, $data);
        $this->request = $request;
        $this->pageFactory = $pageFactory;
        $this->helper = $helper;
    }

    public function view()
    {
        $article = (int)$this->request->getParam('id');
        return $this->pageFactory->create()->load($article);
    }

    public function getHelper()
    {
        return $this->helper->getUrlList();
    }
}
