<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Observer\Adminhtml;

use Magento\Backend\Model\Auth\Session;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\User\Model\User;
use Ronangr1\SystemConfigWhoDidThisLogger\Helper\Adminhtml\Data;
use Ronangr1\SystemConfigWhoDidThisLogger\Logger\Logger;
use Ronangr1\SystemConfigWhoDidThisLogger\Service\System\Config\Record as RecordService;

class SystemConfigSave implements ObserverInterface
{
    private Session $authSession;
    private Json $serializer;
    private RecordService $recordService;

    /**
     * @param Session $authSession
     * @param Json $serializer
     * @param RecordService $recordService
     */
    public function __construct(
        Session          $authSession,
        Json             $serializer,
        RecordService $recordService
    )
    {
        $this->authSession = $authSession;
        $this->serializer = $serializer;
        $this->recordService = $recordService;
    }

    /**
     * @throws LocalizedException
     */
    public function execute(Observer $observer): void
    {
        $user =  $this->authSession->getUser();
        if ($user) {
            $date = new \DateTime;
            $this->recordService->record([
                "user" => sprintf("%s (%s)", $user->getName(), $user->getEmail()),
                "create_at" => $date->format("Y:m:d H:i:s"),
                "section" => $observer->getRequest()->getParam("section"),
                "values" => json_encode($observer->getRequest()->getParam("groups"), JSON_UNESCAPED_SLASHES)
            ]);
        }
    }
}
