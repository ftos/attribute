<?php

namespace Ftos\Component\Attribute\Model;

/**
 * Class Types
 *
 * @package Ftos\Component\Attribute\Model
 */
class Types
{

    const CHECKBOX = 'checkbox';

    const CHOICE = 'choice';

    const NUMBER = 'number';

    const TEXT = 'text';

    const TEXTAREA = 'textarea';

    /**
     * Get an array of attribute type options.
     *
     * @return array
     */
    public static function getTypes ()
    {
        return [
            self::CHECKBOX => 'Checkbox',
            self::CHOICE   => 'Choice',
            self::NUMBER   => 'Number',
            self::TEXT     => 'Text',
            self::TEXTAREA => 'Textarea',
        ];
    }

}