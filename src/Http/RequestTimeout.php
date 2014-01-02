<?php
namespace Http;

/**
 * The server timed out waiting for the request.  According to W3 HTTP 
 * specifications: "The client did not produce a request within the time that 
 * the server was prepared to wait. The client MAY repeat the request without 
 * modifications at any later time."
 */
class RequestTimeout extends ClientError
{
    public $code = 408;
    public $reason = 'Request Timeout';
}
