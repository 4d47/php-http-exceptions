<?php
namespace Http;

/**
 * The client must first authenticate itself with the proxy.
 */
class ProxyAuthenticationRequired extends ClientError
{
    public $code = 407;
    public $reason = 'Proxy Authentication Required';
}
