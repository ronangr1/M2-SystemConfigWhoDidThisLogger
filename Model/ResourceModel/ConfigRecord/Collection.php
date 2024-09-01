<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Model\ResourceModel\ConfigRecord;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'entity_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Ronangr1\SystemConfigWhoDidThisLogger\Model\ConfigRecord::class,
            \Ronangr1\SystemConfigWhoDidThisLogger\Model\ResourceModel\ConfigRecord::class
        );
    }
}

