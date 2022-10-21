<?php declare(strict_types=1);
/**
 * Copyright © Ronan Guérin. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Ronangr1\AdminLastModified\Test\Unit\Helper\Adminhtml;

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    public function testRecordLog(): void
    {
        $data = $this->recordLogDataProvider();
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
        $content = json_encode($data["values"], JSON_FORCE_OBJECT);
        $this->assertJson($content);
    }

    private function recordLogDataProvider(): array
    {
        $date = new \DateTime;
        return [
            "user" => "John Wick (john.wick@hastesiosef.com)",
            "section" => "admin_system_section",
            "date" => $date->format("Y:m:d H:i:s"),
            "values" => ["path" =>
                ["to" => [
                    "section" => "values"
                ]]
            ]
        ];
    }
}
