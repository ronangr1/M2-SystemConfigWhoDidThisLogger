<?php declare(strict_types=1);
/**
 * Copyright © ronangr1. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Ronangr1\SystemConfigWhoDidThisLogger\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    protected $loggerType = Logger::INFO;
    protected $fileName = "/var/log/system/config/who_did_this.log";
}
