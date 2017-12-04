<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\UserBundle\Tests\Controller;

use PHPUnit\Framework\TestCase;
use Sonata\UserBundle\Controller\AdminSecurityController;

class AdminSecurityControllerTest extends TestCase
{
    private $controller;

    protected function setUp(): void
    {
        $this->controller = new AdminSecurityController();
    }

    public function testItIsInstantiable(): void
    {
        $this->assertNotNull($this->controller);
    }
}
