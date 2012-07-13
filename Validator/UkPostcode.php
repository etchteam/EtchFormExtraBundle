<?php
namespace Etch\FormExtraBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * UK Postcode class
 *
 * @author Kevin Dew <kev@etchapps.com>
 * @Annotation
 */
class UkPostcode extends Constraint
{
    /**
     * Default invalid message
     *
     * @var string
     */
    public $message = 'This value is not a valid UK postcode';

    /**
     * Regular expression for UK Postcode
     *
     * @var string
     */
    public $pattern = '/^(GIR|([A-Z]{1,2}[0-9]{1,2}|[A-Z]{1,2}[0-9][A-Z]))( |-)?[0-9][A-Z]{2}$/i';

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
