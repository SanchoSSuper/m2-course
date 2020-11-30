<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Complex\My\Model\ResourceModel\Com;

use Magento\Cms\Api\Data\PageInterface;
use \Magento\Cms\Model\ResourceModel\AbstractCollection;
use Magento\Store\Model\Store;

/**
 * CMS page collection
 */
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\Complex\My\Model\Com::class, \Complex\My\Model\ResourceModel\Com::class);
    }

    public function addStoreFilter($store, $withAdmin = true)
    {
        // TODO: Implement addStoreFilter() method.
    }
}
