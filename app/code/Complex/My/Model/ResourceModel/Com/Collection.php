<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Complex\My\Model\ResourceModel\Page;

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
        $this->_init(\Complex\My\Model\Page::class, \Complex\My\Model\ResourceModel\Page::class);
        $this->_map['fields']['page_id'] = 'main_table.page_id';
        $this->_map['fields']['store'] = 'store_table.store_id';
    }

    public function addStoreFilter($store, $withAdmin = true)
    {
        // TODO: Implement addStoreFilter() method.
    }
}
