<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Service;

use Magento\Framework\App\Cache\Frontend\Pool;
use Magento\Framework\App\Cache\TypeListInterface;

class Cache
{
    public function __construct(
        private readonly TypeListInterface $cacheTypeList,
        private readonly Pool $cacheFrontendPool,
        private readonly array $cacheTypes = []
    ) {
    }

    public function clean(): bool
    {
        try {
            $types = $this->cacheTypes;
            foreach ($types as $type) {
                $this->cacheTypeList->cleanType($type);
            }
            foreach ($this->cacheFrontendPool as $cacheFrontend) {
                $cacheFrontend->getBackend()->clean();
            }
        } catch (\Exception) {
            return false;
        }
        return true;
    }
}
