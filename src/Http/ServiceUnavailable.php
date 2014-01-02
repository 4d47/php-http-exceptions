<?php
namespace Http;

/**
 * The server is currently unavailable (because it is overloaded or down for 
 * maintenance).  Generally, this is a temporary state. Sometimes, this can 
 * be permanent as well on test servers.
 */
class ServiceUnavailable extends ServerError
{
    public $code = 503;
    public $reason = 'Service Unavailable';
}
