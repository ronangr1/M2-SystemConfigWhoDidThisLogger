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
    public function getItems(): array;

    public function setItems(array $items): static;
}

