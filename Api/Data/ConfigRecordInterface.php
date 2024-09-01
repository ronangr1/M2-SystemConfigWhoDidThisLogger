<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Api\Data;

interface ConfigRecordInterface
{
    public const OLD_VALUE = 'old_value';
    public const NEW_VALUE = 'old_value';
    public const SCOPE = 'scope';
    public const AUTHOR = 'author';
    public const ENTITY_ID = 'entity_id';
    public const RECORDED_AT = 'recorded_at';
    public const PATH = 'path';

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId();

    /**
     * Set entity_id
     * @param string $entityId
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setEntityId($entityId);

    /**
     * Get author
     * @return string|null
     */
    public function getAuthor();

    /**
     * Set author
     * @param string $author
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setAuthor($author);

    /**
     * Get path
     * @return string|null
     */
    public function getPath();

    /**
     * Set path
     * @param string $path
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setPath($path);

    /**
     * Get old_value
     * @return string|null
     */
    public function getOldValue();

    /**
     * Set old_value
     * @param string $oldValue
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setOldValue($oldValue);

    /**
     * Get new_value
     * @return string|null
     */
    public function getNewValue();

    /**
     * Set new_value
     * @param string $newValue
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setNewValue($newValue);

    /**
     * Get scope
     * @return string
     */
    public function getScope();

    /**
     * Set scope
     * @param string $scope
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setScope($scope);

    /**
     * Get record_at
     * @return string|null
     */
    public function getRecordedAt();

    /**
     * Set record_at
     * @param string $recordAt
     * @return \Ronangr1\SystemConfigWhoDidThisLogger\Api\Data\ConfigRecordInterface
     */
    public function setRecordedAt($recordAt);
}

