<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\DompdfBundle\Tests\DependencyInjection;

use Core23\DompdfBundle\DependencyInjection\Core23DompdfExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class Core23DompdfExtensionTest extends AbstractExtensionTestCase
{
    public function testLoadDefault()
    {
        $this->load(array(
            'defaults' => array(
                'foo' => 'bar',
                'bar' => 'baz',
            ),
        ));

        $this->assertContainerBuilderHasParameter('core23.dompdf_options', array(
            'foo' => 'bar',
            'bar' => 'baz',
        ));
    }

    protected function getContainerExtensions(): array
    {
        return array(
            new Core23DompdfExtension(),
        );
    }
}
