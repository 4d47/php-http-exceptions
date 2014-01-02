<?php
namespace Http;

/**
 * The server was acting as a gateway or proxy and received
 * an invalid response from the upstream server.
 */
class BadGateway extends ServerError
{
    public $code = 502;
    public $reason = 'Bad Gateway';
}
