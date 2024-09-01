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
    public function _construct(): void
    {
        $this->_init(ResourceModel\ConfigRecord::class);
    }

    /**
     * @inheritDoc
     */
    public function getEntityId(): string
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setEntityId($entityId): ConfigRecordInterface
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * @inheritDoc
     */
    public function getAuthor(): ?string
    {
        return $this->getData(self::AUTHOR);
    }

    /**
     * @inheritDoc
     */
    public function setAuthor(string $author): ConfigRecordInterface
    {
        return $this->setData(self::AUTHOR, $author);
    }

    /**
     * @inheritDoc
     */
    public function getPath(): ?string
    {
        return $this->getData(self::PATH);
    }

    /**
     * @inheritDoc
     */
    public function setPath(string $path): ConfigRecordInterface
    {
        return $this->setData(self::PATH, $path);
    }

    /**
     * @inheritDoc
     */
    public function getOldValue(): ?string
    {
        return $this->getData(self::OLD_VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setOldValue(string $oldValue): ConfigRecordInterface
    {
        return $this->setData(self::OLD_VALUE, $oldValue);
    }

    /**
     * @inheritDoc
     */
    public function getNewValue(): ?string
    {
        return $this->getData(self::NEW_VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setNewValue(string $newValue): ConfigRecordInterface
    {
        return $this->setData(self::NEW_VALUE, $newValue);
    }

    /**
     * @inheritDoc
     */
    public function getScope(): string
    {
        return $this->getData(self::SCOPE);
    }

    /**
     * @inheritDoc
     */
    public function setScope(string $scope): ConfigRecordInterface
    {
        return $this->setData(self::SCOPE, $scope);
    }

    /**
     * @inheritDoc
     */
    public function getRecordedAt(): ?string
    {
        return $this->getData(self::RECORDED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setRecordedAt(string $recordAt): ConfigRecordInterface
    {
        return $this->setData(self::RECORDED_AT, $recordAt);
    }
}

