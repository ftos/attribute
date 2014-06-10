<?php

namespace Ftos\Component\Attribute\Tests\Model;

use Ftos\Component\Attribute\Model\Types;

/**
 * Class TypesTest
 *
 * @package Ftos\Component\Attribute\Tests\Model
 */
class TypesTest extends \PHPUnit_Framework_TestCase
{

    public function testTypes ()
    {
        $types = new \ReflectionClass('Ftos\Component\Attribute\Model\Types');
        $constants = $types->getConstants();

        // The attribute types should be a non-empty array
        $this->assertGreaterThan(0, Types::getTypes());

        // We should have one type for each constant
        $this->assertCount(count($constants), Types::getTypes());
    }

}