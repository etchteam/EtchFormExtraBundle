<?php
namespace Etch\FormExtraBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * Telephone Number class
 *
 * @author Kevin Dew <kev@etchapps.com>
 * @Annotation
 */
class TelephoneNumber extends Constraint
{
    /**
     * Default invalid message
     *
     * @var string
     */
    public $message = 'This value is not a valid telephone number';

    /**
     * Regular expression for a telephone number
     *
     * @var string
     */
    public $pattern = '/^[0-9\(\+]{1}([0-9\(\)-\s])+$/i';

    /**
     * Whether validator has to match or not
     *
     * @var bool
     */
    public $match = true;

    /**
     * Validator used
     *
     * @return string
     */
    public function validatedBy()
    {
        return 'Symfony\Component\Validator\Constraints\RegexValidator';
    }
}
