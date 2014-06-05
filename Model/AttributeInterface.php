<?php

namespace Ftos\Component\Attribute\Model;

use Hadem\Entity\Model\TimestampInterface;

/**
 * Interface AttributeInterface
 *
 * @package Ftos\Component\Attribute\Model
 */
interface AttributeInterface extends TimestampInterface
{

    /**
     * Get the attribute's configuration.
     *
     * @return array
     */
    public function getConfiguration ();

    /**
     * Set the attribute's configuration.
     *
     * @param array $configuration The attribute's configuration.
     * @return AttributeInterface
     */
    public function setConfiguration ( array $configuration );

    /**
     * Get the attribute's description text.
     *
     * @return string
     */
    public function getDescription ();

    /**
     * Set the attribute's description text.
     *
     * @param string $description The description text.
     * @return AttributeInterface
     */
    public function setDescription ( $description );

    /**
     * Get the attribute's key.
     *
     * @return string
     */
    public function getKey ();

    /**
     * Set the attribute's key.
     *
     * @param string $key The attribute's key.
     * @return AttributeInterface
     */
    public function setKey ( $key );

    /**
     * Get the attribute's name.
     *
     * @return string
     */
    public function getName ();

    /**
     * Set the attribute's name.
     *
     * @param string $name The attribute's name.
     * @return AttributeInterface
     */
    public function setName ( $name );

    /**
     * Get the attribute's type.
     *
     * @return string
     */
    public function getType ();

    /**
     * Set the attribute's type.
     *
     * @param string $type The attribute type.
     * @return AttributeInterface
     */
    public function setType ( $type );

}