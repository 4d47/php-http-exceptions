<?php
namespace Http;

/**
 * The requested resource is only available through a proxy, whose address is 
 * provided in the response. Many HTTP clients (such as Mozilla and Internet
 * Explorer) do not correctly handle responses with this status code,
 * primarily for security reasons.
 *
 * @since HTTP/1.1
 */
class UseProxy extends Redirection
{
    public $code = 305;
    public $reason = 'Use Proxy';
}
