<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Service\System\Config;

use Magento\Framework\Exception\LocalizedException;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\ConfigRecordRepositoryInterface;
use Ronangr1\SystemConfigWhoDidThisLogger\Model\ConfigRecordFactory;

class Record
{
    public function __construct(
        private readonly ConfigRecordFactory $configRecordFactory,
        private readonly ConfigRecordRepositoryInterface $configRecordRepository
    ) {
    }

    /**
     * @throws LocalizedException
     */
    public function record(array $data): void
    {
        if (empty($data)) {
            throw new LocalizedException(__("Array cannot be empty."));
        }
        $record = $this->configRecordFactory->create();
        $record->setData($data);
        $this->configRecordRepository->save($record);
    }
}
