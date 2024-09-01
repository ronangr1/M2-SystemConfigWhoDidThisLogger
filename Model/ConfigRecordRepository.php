<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\ConfigRecordRepositoryInterface;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterfaceFactory;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordSearchResultsInterfaceFactory;
use Ronangr1\SystemConfigWhoDidThisLogger\Model\ResourceModel\ConfigRecord as ResourceConfigRecord;
use Ronangr1\SystemConfigWhoDidThisLogger\Model\ResourceModel\ConfigRecord\CollectionFactory as ConfigRecordCollectionFactory;

class ConfigRecordRepository implements ConfigRecordRepositoryInterface
{

    /**
     * @var ResourceConfigRecord
     */
    protected $resource;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var ConfigRecord
     */
    protected $searchResultsFactory;

    /**
     * @var ConfigRecordCollectionFactory
     */
    protected $configRecordCollectionFactory;

    /**
     * @var ConfigRecordInterfaceFactory
     */
    protected $configRecordFactory;


    /**
     * @param ResourceConfigRecord $resource
     * @param ConfigRecordInterfaceFactory $configRecordFactory
     * @param ConfigRecordCollectionFactory $configRecordCollectionFactory
     * @param ConfigRecordSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceConfigRecord $resource,
        ConfigRecordInterfaceFactory $configRecordFactory,
        ConfigRecordCollectionFactory $configRecordCollectionFactory,
        ConfigRecordSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->configRecordFactory = $configRecordFactory;
        $this->configRecordCollectionFactory = $configRecordCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(ConfigRecordInterface $configRecord)
    {
        try {
            $this->resource->save($configRecord);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the configRecord: %1',
                $exception->getMessage()
            ));
        }
        return $configRecord;
    }

    /**
     * @inheritDoc
     */
    public function get($configRecordId)
    {
        $configRecord = $this->configRecordFactory->create();
        $this->resource->load($configRecord, $configRecordId);
        if (!$configRecord->getId()) {
            throw new NoSuchEntityException(__('ConfigRecord with id "%1" does not exist.', $configRecordId));
        }
        return $configRecord;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->configRecordCollectionFactory->create();

        $this->collectionProcessor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);

        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }

        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(ConfigRecordInterface $configRecord)
    {
        try {
            $configRecordModel = $this->configRecordFactory->create();
            $this->resource->load($configRecordModel, $configRecord->getEntityId());
            $this->resource->delete($configRecordModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the ConfigRecord: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($configRecordId)
    {
        return $this->delete($this->get($configRecordId));
    }
}

