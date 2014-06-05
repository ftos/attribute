<?php

namespace spec\Ftos\Component\Attribute\Model;

use Ftos\Component\Attribute\Model\Types;

use PhpSpec\ObjectBehavior;

/**
 * Class AttributeSpec
 *
 * @package spec\Ftos\Component\Attribute\Model
 */
class AttributeSpec extends ObjectBehavior
{

    public function it_is_initializable ()
    {
        $this->shouldHaveType('Ftos\Component\Attribute\Model\Attribute');
    }

    public function it_implements_attribute_interface ()
    {
        $this->shouldImplement('Ftos\Component\Attribute\Model\AttributeInterface');
    }

    public function it_returns_name_when_converted_to_string ()
    {
        $this->setName('Attribute Name');
        $this->__toString()->shouldReturn('Attribute Name');
    }

    public function it_has_null_id_by_default ()
    {
        $this->getId()->shouldReturn(null);
    }

    public function it_has_empty_configuration_array_by_default ()
    {
        $this->getConfiguration()->shouldReturn([]);
    }

    public function its_configuration_is_mutable ()
    {
        $this->setConfiguration(['key' => 'value']);
        $this->getConfiguration()->shouldReturn(['key' => 'value']);
    }

    public function it_has_null_description_by_default ()
    {
        $this->getDescription()->shouldReturn(null);
    }

    public function its_description_is_mutable ()
    {
        $this->setDescription('This is my description, there are many like it, but this one is mine.');
        $this->getDescription()->shouldReturn('This is my description, there are many like it, but this one is mine.');
    }

    public function it_has_null_key_by_default ()
    {
        $this->getKey()->shouldReturn(null);
    }

    public function its_key_is_mutable ()
    {
        $this->setKey('attribute-key');
        $this->getKey()->shouldReturn('attribute-key');
    }

    public function it_has_null_name_by_default ()
    {
        $this->getName()->shouldReturn(null);
    }

    public function its_name_is_mutable ()
    {
        $this->setName('Attribute Name');
        $this->getName()->shouldReturn('Attribute Name');
    }

    public function it_has_type_by_default ()
    {
        $this->getType()->shouldReturn(Types::TEXT);
    }

    public function its_type_is_mutable ()
    {
        $this->setType(Types::TEXTAREA);
        $this->getType()->shouldReturn(Types::TEXTAREA);
    }

    public function it_initializes_creation_time_by_default ()
    {
        $this->getCreatedAt()->shouldHaveType('DateTime');
    }

    public function its_creation_time_is_mutable ()
    {
        $now = new \DateTime();

        $this->setCreatedAt($now);
        $this->getCreatedAt()->shouldReturn($now);
    }

    public function it_has_null_updated_time_by_default ()
    {
        $this->getUpdatedAt()->shouldReturn(null);
    }

    public function its_update_time_is_mutable ()
    {
        $now = new \DateTime();

        $this->setUpdatedAt($now);
        $this->getUpdatedAt()->shouldReturn($now);
    }

    public function it_is_chainable ()
    {
        $now = new \DateTime();

        $this->setConfiguration(['key' => 'value'])->shouldReturn($this);
        $this->setDescription('Attribute description')->shouldReturn($this);
        $this->setKey('attribute-key')->shouldReturn($this);
        $this->setName('Attribute Name')->shouldReturn($this);
        $this->setType(Types::TEXT)->shouldReturn($this);
        $this->setCreatedAt($now)->shouldReturn($this);
        $this->setUpdatedAt($now)->shouldReturn($this);
    }

}