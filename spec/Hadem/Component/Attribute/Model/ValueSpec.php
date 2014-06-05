<?php

namespace spec\Hadem\Component\Attribute\Model;

use Hadem\Component\Attribute\Model\Attribute;
use Hadem\Component\Attribute\Model\AttributeInterface;
use Hadem\Component\Attribute\Model\SubjectInterface;

use Hadem\Component\Attribute\Model\Types;
use PhpSpec\ObjectBehavior;
use PhpSpec\Wrapper\Subject;

/**
 * Class ValueSpec
 *
 * @package spec\Hadem\Component\Attribute\Model
 */
class ValueSpec extends ObjectBehavior
{

    public function it_is_initializable ()
    {
        $this->shouldHaveType('Hadem\Component\Attribute\Model\Value');
    }

    public function it_implements_value_interface ()
    {
        $this->shouldImplement('Hadem\Component\Attribute\Model\ValueInterface');
    }

    public function it_returns_value_when_converted_to_string ()
    {
        $this->setValue('Value');
        $this->__toString()->shouldReturn('Value');
    }

    public function it_has_null_id_by_default ()
    {
        $this->getId()->shouldReturn(null);
    }

    public function it_has_no_attribute_by_default ()
    {
        $this->getAttribute()->shouldReturn(null);
    }

    public function its_attribute_is_assignable ( AttributeInterface $attribute )
    {
        $this->setAttribute($attribute);
        $this->getAttribute()->shouldReturn($attribute);
    }

    public function it_has_no_subject_by_default ()
    {
        $this->getSubject()->shouldReturn(null);
    }

    public function its_subject_is_assignable ( SubjectInterface $subject )
    {
        $this->setSubject($subject);
        $this->getSubject()->shouldReturn($subject);
    }

    public function its_value_is_null_by_default ()
    {
        $this->getValue()->shouldReturn(null);
    }

    public function its_value_is_mutable ()
    {
        $this->setValue('Value');
        $this->getValue()->shouldReturn('Value');
    }

    public function its_value_returns_boolean ( AttributeInterface $attribute )
    {
        $attribute->getType()->willReturn(Types::CHECKBOX);
        $this->setAttribute($attribute);

        $this->setValue('1');
        $this->getValue()->shouldReturn(true);

        $this->setValue('0');
        $this->getValue()->shouldReturn(false);
    }

    public function it_throws_exception_when_getting_configuration_with_empty_attribute ()
    {
        $this->shouldThrow('BadMethodCallException')->duringGetConfiguration();
    }

    public function it_returns_attribute_configuration ( AttributeInterface $attribute )
    {
        $attribute->getConfiguration()->willReturn(['key' => 'value']);
        $this->setAttribute($attribute);

        $this->getConfiguration()->shouldReturn(['key' => 'value']);
    }

    public function it_throws_exception_when_getting_key_with_empty_attribute ()
    {
        $this->shouldThrow('BadMethodCallException')->duringGetKey();
    }

    public function it_returns_attribute_key ( AttributeInterface $attribute )
    {
        $attribute->getKey()->willReturn('attribute-key');
        $this->setAttribute($attribute);

        $this->getKey()->shouldReturn('attribute-key');
    }

    public function it_throws_exception_when_getting_name_with_empty_attribute ()
    {
        $this->shouldThrow('BadMethodCallException')->duringGetName();
    }

    public function it_returns_attribute_name ( AttributeInterface $attribute )
    {
        $attribute->getName()->willReturn('Attribute Name');
        $this->setAttribute($attribute);

        $this->getName()->shouldReturn('Attribute Name');
    }

    public function it_throws_exception_when_getting_type_with_empty_attribute ()
    {
        $this->shouldThrow('BadMethodCallException')->duringGetType();
    }

    public function it_returns_attribute_type ( AttributeInterface $attribute )
    {
        $attribute->getType()->willReturn(Types::TEXT);
        $this->setAttribute($attribute);

        $this->getType()->shouldReturn(Types::TEXT);
    }

    public function it_is_chainable ( AttributeInterface $attribute,SubjectInterface $subject )
    {
        // $attribute = new Attribute();

        $this->setAttribute($attribute)->shouldReturn($this);
        $this->setSubject($subject)->shouldReturn($this);
        $this->setValue('Value')->shouldReturn($this);
    }

}