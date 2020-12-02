<?php


namespace Complex\My\Block;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
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

    public function __construct(Context $context, RequestInterface $request, PageFactory $pageFactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->request = $request;
        $this->pageFactory = $pageFactory;
    }

    public function view()
    {
        $article = (int)$this->request->getParam('id');
        return $this->pageFactory->create()->load($article);
    }
}
