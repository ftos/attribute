<?php

namespace Ftos\Component\Attribute\Model;

/**
 * Class Value
 *
 * @package Ftos\Component\Attribute\Model
 */
class Value implements ValueInterface
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var AttributeInterface
     */
    protected $attribute;

    /**
     * @var SubjectInterface
     */
    protected $subject;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * Convert the value to a string.
     *
     * @return mixed
     */
    public function __toString ()
    {
        return ( is_null($this->getName()) ) ? sprintf('%s@%s', __CLASS__, spl_object_hash($this)) : $this->getName();
    }

    /**
     * Get the value's ID number.
     *
     * @return integer
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute ()
    {
        return $this->attribute;
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute ( AttributeInterface $attribute )
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration ()
    {
        $this->assertAttribute();

        return $this->attribute->getConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function getKey ()
    {
        $this->assertAttribute();

        return $this->attribute->getKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getName ()
    {
        $this->assertAttribute();

        return $this->attribute->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubject ()
    {
        return $this->subject;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubject ( SubjectInterface $subject )
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType ()
    {
        $this->assertAttribute();

        return $this->attribute->getType();
    }

    /**
     * {@inheritdoc}
     */
    public function getValue ()
    {
        if ( $this->attribute && Types::CHECKBOX === $this->attribute->getType() ) {
            return (boolean) $this->value;
        }

        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setValue ( $value )
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Ensure a valid attribute is assigned to this value.
     *
     * @throws \BadMethodCallException
     */
    protected function assertAttribute ()
    {
        if ( ! $this->attribute instanceof AttributeInterface ) {
            throw new \BadMethodCallException('Proxy method unavailable without a valid attribute assigned!');
        }
    }

}