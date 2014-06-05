<?php

namespace Ftos\Component\Attribute\Model;

/**
 * Class Attribute
 *
 * @package Ftos\Component\Attribute\Model
 */
class Attribute implements AttributeInterface
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var array
     */
    protected $configuration = [];

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type = Types::TEXT;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * Attribute initialization.
     */
    public function __construct ()
    {
        $this->setCreatedAt(new \DateTime());
    }

    /**
     * Convert the attribute to a string.
     *
     * @return string
     */
    public function __toString ()
    {
        return $this->getName();
    }

    /**
     * Get the attribute's ID number.
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
    public function getConfiguration ()
    {
        return $this->configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function setConfiguration ( array $configuration )
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription ()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc
     */
    public function setDescription ( $description )
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getKey ()
    {
        return $this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function setKey ( $key )
    {
        $this->key = $key;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName ( $name )
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType ()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType ( $type )
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt ()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt ( \DateTime $timestamp )
    {
        $this->createdAt = $timestamp;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt ()
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt ( \DateTime $timestamp )
    {
        $this->updatedAt = $timestamp;

        return $this;
    }

}