<?php
namespace Http;

/**
 * This is an example of industry practice contradicting the standard.
 * The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary 
 * redirect (the original describing phrase was "Moved Temporarily"), but 
 * popular browsers implemented 302 with the functionality of a 303 See Other. 
 * Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between 
 * the two behaviours.  However, some Web applications and frameworks use the 
 * 302 status code as if it were the 303.
 */
class Found extends Redirection
{
    public $code = 302;
    public $reason = 'Found';
}
