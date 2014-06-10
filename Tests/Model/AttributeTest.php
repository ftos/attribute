<?php

namespace Ftos\Component\Attribute\Tests\Model;

use Ftos\Component\Attribute\Model\Attribute;
use Ftos\Component\Attribute\Model\Types;

/**
 * Class AttributeTest
 *
 * @package Ftos\Component\Attribute\Tests\Model
 */
class AttributeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * When converted to a string, the attribute entity should always return something.
     * If the attribute has a name, return that.
     */
    public function testToString ()
    {
        $attribute = $this->getAttribute();

        // Something should always be returned
        $this->assertNotNull($attribute->__toString());

        // When a name is available, return that
        $attribute->setName('Test Attribute Name');
        $this->assertEquals('Test Attribute Name', $attribute->__toString());
    }

    /**
     * The ID is null by default.
     */
    public function testId ()
    {
        $attribute = $this->getAttribute();
        $this->assertNull($attribute->getId());
    }

    /**
     * Test the mutability of the attribute's configuration.
     */
    public function testConfiguration ()
    {
        $attribute = $this->getAttribute();

        // By default, configuration is an empty array
        $this->assertEquals([], $attribute->getConfiguration());

        // Configuration is mutable
        $attribute->setConfiguration(['key' => 'value']);
        $this->assertEquals(['key' => 'value'], $attribute->getConfiguration());
    }

    /**
     * Test the mutability of the attributes's description text.
     */
    public function testDescription ()
    {
        $attribute = $this->getAttribute();

        // By default, the description is null
        $this->assertNull($attribute->getDescription());

        // The description is mutable
        $attribute->setDescription('The attribute description text.');
        $this->assertEquals('The attribute description text.', $attribute->getDescription());
    }

    /**
     * Test the mutability of the attributes's key.
     */
    public function testKey ()
    {
        $attribute = $this->getAttribute();

        // By default, the key is null
        $this->assertNull($attribute->getKey());

        // The key is mutable
        $attribute->setKey('test-attribute-key');
        $this->assertEquals('test-attribute-key', $attribute->getKey());
    }

    /**
     * Test mutability of the attribute name.
     */
    public function testName ()
    {
        $attribute = $this->getAttribute();
        $this->assertNull($attribute->getName());

        $attribute->setName('Attribute Name');
        $this->assertEquals('Attribute Name', $attribute->getName());
    }

    /**
     * Test the mutability of the attributes's type.
     */
    public function testType ()
    {
        $attribute = $this->getAttribute();

        // By default, the type Types::TEXT
        $this->assertEquals(Types::TEXT, $attribute->getType());

        // The type is mutable
        $attribute->setType(Types::CHECKBOX);
        $this->assertEquals(Types::CHECKBOX, $attribute->getType());
    }

    /**
     * Test the attribute timestamps
     */
    public function testTimestamps ()
    {
        $attribute = $this->getAttribute();

        // The creation timestamp is automatically set
        $this->assertInstanceOf('DateTime', $attribute->getCreatedAt());

        // The updated timestamp is null by default
        $this->assertNull($attribute->getUpdatedAt());

        // Both are mutable
        $now = new \DateTime();
        $attribute->setCreatedAt($now);
        $attribute->setUpdatedAt($now);

        $this->assertEquals($now, $attribute->getCreatedAt());
        $this->assertEquals($now, $attribute->getUpdatedAt());
    }

    /**
     * @return Attribute
     */
    protected function getAttribute ()
    {
        return $this->getMockForAbstractClass('Ftos\Component\Attribute\Model\Attribute');
    }

}