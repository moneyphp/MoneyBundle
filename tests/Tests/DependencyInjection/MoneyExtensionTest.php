<?php
declare(strict_types=1);

namespace Tests\Money\MoneyBundle\DependencyInjection;

use Money\MoneyBundle\MoneyBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class MoneyExtensionTest extends TestCase
{
    /**
     * Goal of this test is container not to throw exception when it is compiled.
     */
    public function testThatContainerCanBeCompliled()
    {
        $bundle = new MoneyBundle();
        $extension = $bundle->getContainerExtension();
        $container = new ContainerBuilder();
        $extension->load([], $container);
        $bundle->build($container);
        $container->compile();
    }
}
