<?php

namespace Ftos\Component\Attribute\Tests\Model;

use Ftos\Component\Attribute\Model\Attribute;
use Ftos\Component\Attribute\Model\SubjectInterface;
use Ftos\Component\Attribute\Model\Types;
use Ftos\Component\Attribute\Model\Value;

/**
 * Class ValueTest
 *
 * @package Ftos\Component\Attribute\Tests\Model
 */
class ValueTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var Value
     */
    private $value;

    /**
     * Value/attribute setup.
     */
    public function __construct ()
    {
        $this->attribute = $this->getAttribute();
        $this->attribute->setName('Test Attribute Name');

        $this->value = $this->getValue();
        $this->value->setAttribute($this->attribute);
    }

    /**
     * When converted to a string, the value entity should always return something.
     * If the value has a name, return that.
     */
    public function testToString ()
    {
        // Something should always be returned
        $this->assertNotNull($this->value->__toString());

        // When a name is available, return that
        $this->assertEquals($this->attribute->getName(), $this->value->__toString());
    }

    /**
     * The ID is null by default.
     */
    public function testId ()
    {
        $this->assertNull($this->value->getId());
    }

    /**
     * Test the retrieval of the value's attribute.
     */
    public function testAttribute ()
    {
        $this->assertEquals($this->attribute, $this->value->getAttribute());

        // The attribute is mutable
        $attribute = $this->getAttribute()->setName('New Test Attribute');
        $this->value->setAttribute($attribute);
        $this->assertEquals($attribute, $this->value->getAttribute());
    }

    /**
     * Test the retrieval of the configuration of the related attribute.
     */
    public function testConfiguration ()
    {
        // Empty configuration by default
        $this->assertEquals([], $this->value->getConfiguration());

        // The attribute's updated configuration
        $this->attribute->setConfiguration(['key' => 'value']);
        $this->assertEquals(['key' => 'value'], $this->value->getConfiguration());
    }

    /**
     * Test the retrieval of the related attribute's key.
     */
    public function testKey ()
    {
        // Empty key by default
        $this->assertNull($this->value->getKey());

        // The attribute's updated key
        $this->attribute->setKey('test-attribute-key');
        $this->assertEquals('test-attribute-key', $this->value->getKey());
    }

    /**
     * Test the value's subject.
     */
    public function testSubject ()
    {
        // Empty subject by default
        $this->assertNull($this->value->getSubject());

        // Subjec is mutable
        $this->value->setSubject($this->getSubject());
    }

    /**
     * Test the retrieval of the related attribute's type.
     */
    public function testType ()
    {
        // The type is Types::TEXT by default
        $this->assertEquals(Types::TEXT, $this->value->getType());

        // The attribute's updated type
        $this->attribute->setType(Types::CHECKBOX);
        $this->assertEquals(Types::CHECKBOX, $this->value->getType());
    }

    /**
     * Test the value's value.
     */
    public function testValue ()
    {
        // Value is null by default
        $this->assertNull($this->value->getValue());

        // If type is Types::CHECKBOX, value should return a boolean
        $this->value->getAttribute()->setType(Types::CHECKBOX);

        // False by default
        $this->assertFalse($this->value->getValue());

        // Test true
        $this->value->setValue('1');
        $this->assertTrue($this->value->getValue());

        // Test false
        $this->value->setValue('0');
        $this->assertFalse($this->value->getValue());
    }

    /**
     * Test assert attribute (ensure the value has an attribute assigned).
     */
    public function testAssertAttribute ()
    {
        try {
            // Attempting to get the type when the value's attribute is not set will throw an exception
            $value = $this->getValue();
            $value->getType();
        } catch ( \BadMethodCallException $exception ) {
            return;
        }

        $this->fail('An expected exception has not been raised.');
    }

    /**
     * @return Attribute
     */
    protected function getAttribute ()
    {
        return $this->getMockForAbstractClass('Ftos\Component\Attribute\Model\Attribute');
    }

    /**
     * @return SubjectInterface
     */
    protected function getSubject ()
    {
        return $this->getMockForAbstractClass('Ftos\Component\Attribute\Model\SubjectInterface');
    }

    /**
     * @return Value
     */
    protected function getValue ()
    {
        return $this->getMockForAbstractClass('Ftos\Component\Attribute\Model\Value');
    }

}