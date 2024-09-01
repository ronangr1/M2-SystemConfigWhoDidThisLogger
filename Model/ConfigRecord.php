<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Model;

use Magento\Framework\Model\AbstractModel;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface;

class ConfigRecord extends AbstractModel implements ConfigRecordInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(ResourceModel\ConfigRecord::class);
    }

    /**
     * @inheritDoc
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * @inheritDoc
     */
    public function getAuthor()
    {
        return $this->getData(self::AUTHOR);
    }

    /**
     * @inheritDoc
     */
    public function setAuthor($author)
    {
        return $this->setData(self::AUTHOR, $author);
    }

    /**
     * @inheritDoc
     */
    public function getPath()
    {
        return $this->getData(self::PATH);
    }

    /**
     * @inheritDoc
     */
    public function setPath($path)
    {
        return $this->setData(self::PATH, $path);
    }

    /**
     * @inheritDoc
     */
    public function getOldValue()
    {
        return $this->getData(self::OLD_VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setOldValue($oldValue)
    {
        return $this->setData(self::OLD_VALUE, $oldValue);
    }

    /**
     * @inheritDoc
     */
    public function getNewValue()
    {
        return $this->getData(self::NEW_VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setNewValue($newValue)
    {
        return $this->setData(self::NEW_VALUE, $newValue);
    }

    /**
     * @inheritDoc
     */
    public function getScope()
    {
        return $this->getData(self::SCOPE);
    }

    /**
     * @inheritDoc
     */
    public function setScope($scope)
    {
        return $this->setData(self::SCOPE, $scope);
    }

    /**
     * @inheritDoc
     */
    public function getRecordedAt()
    {
        return $this->getData(self::RECORDED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setRecordedAt($recordedAt)
    {
        return $this->setData(self::RECORDED_AT, $recordedAt);
    }
}

