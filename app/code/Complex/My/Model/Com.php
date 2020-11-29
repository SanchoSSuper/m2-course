<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Complex\My\Model;

use Magento\Cms\Api\Data\PageInterface;
use Magento\Cms\Helper\Page as PageHelper;
use Magento\Cms\Model\Page\CustomLayout\CustomLayoutRepository;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\AbstractModel;

/**
 * Cms Page Model
 *
 * @api
 * @method Page setStoreId(int $storeId)
 * @method int getStoreId()
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @since 100.0.2
 */
class Page extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Complex\My\Model\ResourceModel\Page::class);
    }
}
