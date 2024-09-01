<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Controller\Adminhtml\ConfigRecord;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Ronangr1\SystemConfigWhoDidThisLogger\Api\ConfigRecordRepositoryInterface;
use Ronangr1\SystemConfigWhoDidThisLogger\Controller\Adminhtml\ConfigRecord;
use Ronangr1\SystemConfigWhoDidThisLogger\Service\Cache;

class Revert extends ConfigRecord
{
    /**
     * @param \Ronangr1\SystemConfigWhoDidThisLogger\Api\ConfigRecordRepositoryInterface $configRecordRepository
     * @param \Magento\Framework\App\Config\Storage\WriterInterface $writer
     * @param \Ronangr1\SystemConfigWhoDidThisLogger\Service\Cache $cache
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        private readonly ConfigRecordRepositoryInterface $configRecordRepository,
        private readonly WriterInterface $writer,
        private readonly Cache $cache,
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Revert action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('entity_id');
        if ($id) {
            try {
                $configRecord = $this->configRecordRepository->get($id);
                if($configRecord->getEntityId()) {
                    $this->writer->save($configRecord->getPath(), $configRecord->getOldValue(), $configRecord->getScope());
                    $this->configRecordRepository->delete($configRecord);
                    $this->cache->clean();
                    $this->messageManager->addSuccessMessage(__('You reverted the record.'));
                }
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['entity_id' => $id]);
            }
        }
        $this->messageManager->addErrorMessage(__('We can\'t find a record to revert.'));
        return $resultRedirect->setPath('*/*/');
    }
}

