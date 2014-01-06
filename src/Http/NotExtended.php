<?php
namespace Http;

/**
 * Further extensions to the request are required for the server to fulfill it.
 */
class NotExtended extends ServerError
{
    public $code = 510;
    public $reason = 'Not Extended';
}
