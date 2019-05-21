<?php

namespace Shopsys\FrameworkBundle\Model\Security\Filesystem\Exception;

use Exception;

class InstanceNotInjectedException extends Exception implements FilesystemException
{
    /**
     * @param string $message
     * @param \Exception|null $previous
     */
    public function __construct($message = '', ?Exception $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
