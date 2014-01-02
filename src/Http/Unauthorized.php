<?php
namespace Http;

/**
 * Similar to 403 Forbidden, but specifically for use when authentication is 
 * required and has failed or has not yet been provided.  The response must 
 * include a WWW-Authenticate header field containing a challenge applicable
 * to the requested resource.  See Basic access authentication and Digest
 * access authentication.
 */
class Unauthorized extends ClientError
{
    public $code = 401;
    public $reason = 'Unauthorized';
}
