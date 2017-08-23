<?php

namespace Tests\Money\MoneyBundle\DependencyInjection;

use Money\MoneyBundle\MoneyBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MoneyExtensionTest extends \PHPUnit_Framework_TestCase
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