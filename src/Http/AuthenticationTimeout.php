<?php
namespace Http;

/**
 * Not a part of the HTTP standard, 419 Authentication Timeout denotes that 
 * previously valid authentication has expired. It is used as an alternative
 * to 401 Unauthorized in order to differentiate from otherwise authenticated 
 * clients being denied access to specific server resources.
 */
class AuthenticationTimeout extends ClientError
{
    public $code = 419;
    public $reason = 'Authentication Timeout';
}
