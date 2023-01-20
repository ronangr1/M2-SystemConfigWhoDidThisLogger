<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Service\System\Config;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Serialize\Serializer\Json;
use Ronangr1\SystemConfigWhoDidThisLogger\Logger\Logger as SystemConfigLogger;

class Record
{
    private SystemConfigLogger $systemConfigLogger;
    private Json $serializer;

    /**
     * @param SystemConfigLogger $systemConfigLogger
     * @param Json $serializer
     */
    public function __construct(
        SystemConfigLogger $systemConfigLogger,
        Json               $serializer
    )
    {
        $this->systemConfigLogger = $systemConfigLogger;
        $this->serializer = $serializer;
    }

    /**
     * @throws LocalizedException
     */
    public function record(array $data): void
    {
        if (empty($data)) {
            throw new LocalizedException(__("Array cannot be empty."));
        }
        $this->systemConfigLogger->info($this->serializer->serialize($data));
    }
}
