<?php
/**
 * Copyright © Ronan Guérin. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\AdminLastModified\Observer\Adminhtml;

use Magento\Backend\Model\Auth\Session;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\User\Model\User;
use Ronangr1\AdminLastModified\Helper\Adminhtml\Data;
use Ronangr1\AdminLastModified\Logger\Logger;

class SystemConfigSave implements ObserverInterface
{
    private Session $authSession;
    private ManagerInterface $messageManager;
    private Logger $logger;
    private Json $serializer;
    private Data $helper;
    private $adminUser;

    /**
     * @param Session $authSession
     * @param ManagerInterface $messageManager
     * @param Logger $logger
     * @param Json $serializer
     * @param Data $helper
     */
    public function __construct(
        Session $authSession,
        ManagerInterface $messageManager,
        Logger $logger,
        Json $serializer,
        Data $helper
    )
    {
        $this->authSession = $authSession;
        $this->messageManager = $messageManager;
        $this->logger = $logger;
        $this->serializer = $serializer;
        $this->helper = $helper;
    }

    public function execute(Observer $observer): void
    {
        try {
            $user = $this->getUser();
            if($user) {
                $date = new \DateTime;
                $this->helper->recordLog([
                    "user" => sprintf("%s (%s)", $user->getName(), $user->getEmail()),
                    "section" => $observer->getRequest()->getParam("section"),
                    "date" => $date->format("Y:m:d H:i:s"),
                    "values" => $this->serializer->serialize($observer->getRequest()->getParam("groups"))
                ]);
            }
        } catch (CouldNotSaveException $e) {
            $this->messageManager->addErrorMessage(sprintf("An error occurred while saving system config : %s", $e->getMessage()));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong. Please try again."));
        }
    }

    private function getUser(): ?User
    {
        if (!$this->adminUser) {
            $this->adminUser = $this->authSession->getUser();
        }
        return $this->adminUser;
    }
}
