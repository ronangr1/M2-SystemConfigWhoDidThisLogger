<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Api\Data;

interface ConfigRecordSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get ConfigRecord list.
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface[]
     */
    public function getItems();

    /**
     * Set author list.
     * @param \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

