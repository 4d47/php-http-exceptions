<?php
namespace Http;

/**
 * The URI provided was too long for the server to process.  Often the result 
 * of too much data being encoded as a query-string of a GET request, in which 
 * case it should be converted to a POST request.
 */
class RequestURITooLong extends ClientError
{
    public $code = 414;
    public $reason = 'Request URI Too Long';
}
