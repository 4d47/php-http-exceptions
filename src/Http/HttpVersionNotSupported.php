<?php
namespace Http;

/**
 * The server does not support the HTTP protocol version used in the request.
 */
class HttpVersionNotSupported extends ServerError
{
    public $code = 505;
    public $reason = 'HTTP Version Not Supported';
}
