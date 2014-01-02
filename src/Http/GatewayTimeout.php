<?php
namespace Http;

/**
 * The server was acting as a gateway or proxy and did not receive
 * a timely response from the upstream server.
 */
class GatewayTimeout extends ServerError
{
    public $code = 504;
    public $reason = 'Gateway Timeout';
}
