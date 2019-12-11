<?php

namespace Shopsys\FrameworkBundle\Form\Constraints;

use Shopsys\FrameworkBundle\Component\Domain\Domain;
use Shopsys\FrameworkBundle\Model\Customer\UserFacade;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueEmailValidator extends ConstraintValidator
{
    /**
     * @var \Shopsys\FrameworkBundle\Model\Customer\UserFacade
     */
    private $userFacade;

    /**
     * @var \Shopsys\FrameworkBundle\Component\Domain\Domain
     */
    private $domain;

    /**
     * @param \Shopsys\FrameworkBundle\Model\Customer\UserFacade $userFacade
     * @param \Shopsys\FrameworkBundle\Component\Domain\Domain $domain
     */
    public function __construct(
        UserFacade $userFacade,
        Domain $domain
    ) {
        $this->userFacade = $userFacade;
        $this->domain = $domain;
    }

    /**
     * @param mixed $value
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof UniqueEmail) {
            throw new \Symfony\Component\Validator\Exception\UnexpectedTypeException($constraint, UniqueCollection::class);
        }

        $email = (string)$value;

        $domainId = $constraint->domainId ?? $this->domain->getId();

        if ($constraint->ignoredEmail != $value && $this->userFacade->findUserByEmailAndDomain($email, $domainId) !== null) {
            $this->context->addViolation(
                $constraint->message,
                [
                    '{{ email }}' => $email,
                ]
            );
        }
    }
}
