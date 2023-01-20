<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Plugin\App\Config;

use Magento\Backend\Model\Auth\Session;
use Ronangr1\SystemConfigWhoDidThisLogger\Service\System\Config\Record;

class Value
{
    private Session $authSession;
    private Record $recordService;

    /**
     * @param Session $authSession
     * @param Record $recordService
     */
    public function __construct(
        Session $authSession,
        Record $recordService
    )
    {
        $this->authSession = $authSession;
        $this->recordService = $recordService;
    }

    public function afterIsValueChanged(\Magento\Framework\App\Config\Value $subject, $result)
    {
        if($result) {
            $user = $this->authSession->getUser();
            try {
                if ($user) {
                    $date = new \DateTime;
                    $this->recordService->record([
                        "user" => sprintf("%s (%s)", $user->getName(), $user->getEmail()),
                        "created_at" => $date->format("Y:m:d H:i:s"),
                        "path" => $subject->getPath(),
                        "new_value" => $subject->getValue(),
                        "old_value" => $subject->getOldValue()
                    ]);
                }
            } catch (\Exception $e) {
                $this->logger->debug($e->getMessage());
            }
        }
    }
}
