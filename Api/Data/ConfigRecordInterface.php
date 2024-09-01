<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Api\Data;

interface ConfigRecordInterface
{
    public const ENTITY_ID = 'entity_id';
    public const OLD_VALUE = 'old_value';
    public const NEW_VALUE = 'old_value';
    public const SCOPE = 'scope';
    public const AUTHOR = 'author';
    public const RECORDED_AT = 'recorded_at';
    public const PATH = 'path';

    /**
     * Get entity_id
     * @return string
     */
    public function getEntityId(): string;

    /**
     * Set entity_id
     * @param string $entityId
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setEntityId($entityId): ConfigRecordInterface;

    /**
     * Get author
     * @return string|null
     */
    public function getAuthor(): ?string;

    /**
     * Set author
     * @param string $author
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setAuthor(string $author): ConfigRecordInterface;

    /**
     * Get path
     * @return string|null
     */
    public function getPath(): ?string;

    /**
     * Set path
     * @param string $path
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setPath(string $path): ConfigRecordInterface;

    /**
     * Get old_value
     * @return string|null
     */
    public function getOldValue(): ?string;

    /**
     * Set old_value
     * @param string $oldValue
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setOldValue(string $oldValue): ConfigRecordInterface;

    /**
     * Get new_value
     * @return string|null
     */
    public function getNewValue(): ?string;

    /**
     * Set new_value
     * @param string $newValue
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setNewValue(string $newValue): ConfigRecordInterface;

    /**
     * Get scope
     * @return string
     */
    public function getScope(): string;

    /**
     * Set scope
     * @param string $scope
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setScope(string $scope): ConfigRecordInterface;

    /**
     * Get recorded_at
     * @return string|null
     */
    public function getRecordedAt(): ?string;

    /**
     * Set recorded_at
     * @param string $recordAt
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setRecordedAt(string $recordAt): ConfigRecordInterface;
}

