<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;

abstract class ConfigRecord extends Action
{
    /**
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function initPage(Page $resultPage): Page
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('Config'), __('Config'))
            ->addBreadcrumb(__('Record'), __('Record'));
        return $resultPage;
    }
}

