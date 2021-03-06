<?php
namespace Http;

/**
 * This code was defined in 1998 as one of the traditional IETF April Fools' 
 * jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not 
 * expected to be implemented by actual HTTP servers.
 */
class ImATeapot extends ClientError
{
    public $code = 418;
    public $reason = "I'm a teapot";
}
