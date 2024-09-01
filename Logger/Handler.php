<?php
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Ronangr1\SystemConfigWhoDidThisLogger\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    protected $loggerType = Logger::INFO;

    protected $fileName = "/var/log/system/config/records.log";
}
