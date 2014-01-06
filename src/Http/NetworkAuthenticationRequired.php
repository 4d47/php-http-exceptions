<?php
namespace Http;

/**
 * The client needs to authenticate to gain network access. Intended for use by 
 * intercepting proxies used to control access to the network (e.g., "captive 
 * portals" used to require agreement to Terms of Service before granting full 
 * Internet access via a Wi-Fi hotspot).
 */
class NetworkAuthenticationRequired extends ServerError
{
    public $code = 511;
    public $reason = 'Network Authentication Required';
}
