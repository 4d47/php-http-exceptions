<?php
namespace Http;

/**
 * The server connection timed out.
 */
class ConnectionTimedOut extends ServerError
{
    public $code = 522;
    public $reason = 'Connection timed out';
}
