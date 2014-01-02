<?php
namespace Http;

/**
 * The requested resource could not be found but may be available again
 * in the future.  Subsequent requests by the client are permissible.
 */
class NotFound extends ClientError
{
    public $code = 404;
    public $reason = 'Not Found';
}
