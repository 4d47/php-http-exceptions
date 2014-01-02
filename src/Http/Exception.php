<?php
namespace Http;

/**
 * Base class to represent HTTP status in the 3xx - 5xx range.
 * $code, $reason and $message are public instead of using
 * getter/setter to enable easier serialization.
 *
 * @see http://www.youtube.com/watch?v=JGD1phBWEcc
 */
abstract class Exception extends \Exception
{
    public $code;
    public $reason;
    public $message;

    public function __construct($message = null, \Exception $previous = null)
    {
        parent::__construct($message, $this->code, $previous);
    }
}
