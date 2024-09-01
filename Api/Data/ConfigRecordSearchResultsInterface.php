<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface ConfigRecordSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface[]
     */
    public function getItems(): array;

    /**
     * @param \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface[] $items
     * @return $this
     */
    public function setItems(array $items): static;
}

