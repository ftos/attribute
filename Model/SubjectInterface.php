<?php

namespace Ftos\Component\Attribute\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Interface SubjectInterface
 *
 * @package Ftos\Component\Attribute\Model
 */
interface SubjectInterface
{

    /**
     * Add a new attribute value.
     *
     * @param ValueInterface $value The attribute value.
     * @return SubjectInterface
     */
    public function addAttribute ( ValueInterface $value );

    /**
     * The an attribute value by attribute key.
     *
     * @param string $key The attribute's key.
     * @return ValueInterface
     */
    public function getAttributeByKey ( $key );

    /**
     * Get the subject's related attribute values.
     *
     * @return Collection|ValueInterface[]
     */
    public function getAttributes ();

    /**
     * Determine if the subject has the specified attribute.
     *
     * @param AttributeInterface $attribute The attribute in question.
     * @return boolean
     */
    public function hasAttribute ( AttributeInterface $attribute );

    /**
     * Determine if the subject has the specified attribute by key.
     *
     * @param string $key The attribute's key.
     * @return boolean
     */
    public function hasAttributeByKey ( $key );

    /**
     * Remove a related attribute value from the subject.
     *
     * @param ValueInterface $value The attribute value to be removed.
     * @return SubjectInterface
     */
    public function removeAttribute ( ValueInterface $value );

    /**
     * Set the subject attribute values.
     *
     * @param Collection $attributes The collection of attribute values to set.
     * @return SubjectInterface
     */
    public function setAttributes ( Collection $attributes );

}