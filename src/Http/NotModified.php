<?php
namespace Http;

/**
 * Indicates that the resource has not been modified since the version 
 * specified by the request headers If-Modified-Since or If-Match.
 * This means that there is no need to retransmit the resource,
 * since the client still has a previously-downloaded copy.
 */
class NotModified extends Redirection
{
    public $code = 304;
    public $reason = 'Not Modified';
}
