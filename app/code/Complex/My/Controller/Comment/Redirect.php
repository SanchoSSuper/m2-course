<?php


namespace Complex\My\Controller\Comment;


use Complex\My\Model\ComFactory;
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
     * @var ComFactory
     */
    private $comFactory;

    public function execute()
    {
        /* @var \Complex\My\Model\Com $com */
        $com = $this->comFactory->create();
        foreach($this->request->getParams() as $key=>$elem) {
            if ($elem == "on") $com->setData($key, 1);
            else $com->setData($key, $elem);
            $com->save();
        }
        $this->_redirect('complex/comment/index');
    }

    public function __construct(Context $context, RequestInterface $request, ComFactory $comFactory)
    {
        parent::__construct($context);
        $this->request = $request;
        $this->comFactory = $comFactory;
    }
}
