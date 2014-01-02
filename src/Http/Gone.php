<?php
namespace Http;

/**
 * Indicates that the resource requested is no longer available and will not be 
 * available again.  This should be used when a resource has been intentionally 
 * removed and the resource should be purged.  Upon receiving a 410 status code, 
 * the client should not request the resource again in the future.  Clients such 
 * as search engines should remove the resource from their indices.  Most use 
 * cases do not require clients and search engines to purge the resource, and a 
 * "404 Not Found" may be used instead.
 */
class Gone extends ClientError
{
    public $code = 410;
    public $reason = 'Gone';
}
