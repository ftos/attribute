<?php

namespace Ftos\Component\Attribute\Model;

/**
 * Interface ValueInterface
 *
 * @package Ftos\Component\Attribute\Model
 */
interface ValueInterface
{

    /**
     * Get the value's related attribute.
     *
     * @return AttributeInterface
     */
    public function getAttribute ();

    /**
     * Set the value's related attribute.
     *
     * @param AttributeInterface $attribute Related attribute.
     * @return ValueInterface
     */
    public function setAttribute ( AttributeInterface $attribute );

    /**
     * Proxy method to get the configuration of the related attribute.
     *
     * @return array
     */
    public function getConfiguration ();

    /**
     * Proxy method to get the key of the related attribute.
     *
     * @return string
     */
    public function getKey ();

    /**
     * Proxy method to get the name of the related attribute.
     *
     * @return string
     */
    public function getName ();

    /**
     * Get the value's related subject.
     *
     * @return SubjectInterface
     */
    public function getSubject ();

    /**
     * Set the value's related subject.
     *
     * @param SubjectInterface $subject Related subject.
     * @return ValueInterface
     */
    public function setSubject ( SubjectInterface $subject );

    /**
     * Proxy method to get the type of the related attribute.
     *
     * @return string
     */
    public function getType ();

    /**
     * Get the value.
     *
     * @return mixed
     */
    public function getValue ();

    /**
     * Set the value.
     *
     * @param mixed $value The value to set.
     * @return ValueInterface
     */
    public function setValue ( $value );

}