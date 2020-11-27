<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
//declare(strict_types=1);
namespace Complex\My\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CreateArticle implements DataPatchInterface
{

    /**
     * @var Complex\My\Model\PageFactory
     */
    private $pageFactory;

    public function __construct(
        \Complex\My\Model\PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        /** @var Complex\My\Model\Page $page */
        $page = $this->pageFactory->create();
//        $page->setData(
//            [
//                'author' => 'Sashka',
//                'title' => 'My blog',
//                'description' => 'It\'s me man' ,
//                'content' => 'my content',
//                'status' => '1',
//                'enabled' => '1'
//            ]
//        );
//        $page->save();

        $data=[
            [
                'author' => 'Sashka',
                'title' => 'My blog',
                'description' => 'It\'s me man' ,
                'content' => 'my content',
                'status' => 1,
                'enabled' => 1
            ],
            [
                'author' => 'Gleb',
                'title' => 'My blog',
                'description' => 'My man' ,
                'content' => 'my content',
                'status' => 1,
                'enabled' => 0
            ],
            [
                'author' => 'Pashka',
                'title' => 'My blog',
                'description' => 'It\'s me man' ,
                'content' => 'content',
                'status' => 1,
                'enabled' => 1
            ],
            [
                'author' => 'Andriy',
                'title' => 'My blog',
                'description' => 'It\'s me man' ,
                'content' => 'my content',
                'status' => 1,
                'enabled' => 0
            ]
        ];
        foreach($data as $elem) {
            $page->setData($elem);
            $page->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}
