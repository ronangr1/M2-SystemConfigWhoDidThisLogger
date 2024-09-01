<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface;

interface ConfigRecordRepositoryInterface
{
    /**
     * Save Config Record
     * @param \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface $configRecord
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        ConfigRecordInterface $configRecord
    ): ConfigRecordInterface;

    /**
     * Retrieve Config Record
     * @param string $entityId
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get(string $entityId): ConfigRecordInterface;

    /**
     * Retrieve Config Records matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    ): Data\ConfigRecordSearchResultsInterface;

    /**
     * Delete Config Record
     * @param \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface $configRecord
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        ConfigRecordInterface $configRecord
    ): bool;

    /**
     * Delete Config Record by ID
     * @param string $entityId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(string $entityId): bool;
}

