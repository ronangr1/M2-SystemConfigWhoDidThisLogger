<?php
/**
 * Copyright © Ronan Guérin. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\AdminLastModified\Helper\Adminhtml;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Serialize\Serializer\Json;
use Ronangr1\AdminLastModified\Logger\Logger;

class Data
{
    private Logger $logger;
    private Json $serializer;

    /**
     * @param Logger $logger
     * @param Json $serializer
     */
    public function __construct(
        Logger $logger,
        Json   $serializer
    )
    {
        $this->logger = $logger;
        $this->serializer = $serializer;
    }

    /**
     * @throws LocalizedException
     */
    public function recordLog(array $data): void
    {
        if (empty($data)) {
            throw new LocalizedException(__("Array cannot be empty."));
        }
        $this->logger->info($this->serializer->serialize($data));
    }
}
