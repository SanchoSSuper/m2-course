<?php


namespace Complex\My\Helper;

use Complex\My\Model\ResourceModel\Com\Collection;
use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var Collection
     */
    private $collection;

    public function __construct(Context $context, Collection $collection)
    {
        parent::__construct($context);
        $this->collection = $collection;
    }

    public function getUrlList()
    {
        $collection = $this->collection->load();
        $data = [];
        foreach($collection as $elem)
        {
            $data[$elem->getUrl()] = $elem->getEntityId();
        }
        return $data;
    }
}
