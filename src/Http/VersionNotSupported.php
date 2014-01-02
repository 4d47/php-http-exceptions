<?php
namespace Http;

/**
 * The server does not support the HTTP protocol version used in the request.
 */
class VersionNotSupported extends ServerError
{
    public $code = 505;
    public $reason = 'Version Not Supported';
}
