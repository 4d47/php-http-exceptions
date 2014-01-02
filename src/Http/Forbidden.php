<?php
namespace Http;

/**
 * The request was a valid request, but the server is refusing to respond to 
 * it.  Unlike a 401 Unauthorized response, authenticating will make no 
 * difference.  On servers where authentication is required, this commonly 
 * means that the provided credentials were successfully authenticated but that 
 * the credentials still do not grant the client permission to access the 
 * resource (e.g., a recognized user attempting to access restricted content).
 */
class Forbidden extends ClientError
{
    public $code = 403;
    public $reason = 'Forbidden';
}
