<?php

namespace Beepsend\Exception;

/**
 * Throw when we send invalid request
 * @package Beepsend
 */
final class InvalidRequest extends \Exception
{
    /**
     * @internal
     * @param string $message
     * @param integer $code
     * @param Object $previous
     */
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    
}
