<?php
namespace Http;

/**
 * The server is unwilling to process the request because either an individual 
 * header field, or all the header fields collectively, are too large.
 */
class RequestHeaderFieldsTooLarge extends ClientError
{
    public $code = 431;
    public $reason = 'Request Header Fields Too Large';
}
