<?php
namespace Http;

/**
 * The server either does not recognize the request method, or it lacks the 
 * ability to fulfill the request.  Usually this implies future availability 
 * (e.g., a new feature of a web-service API).
 */
class NotImplemented extends ServerError
{
    public $code = 501;
    public $reason = 'Not Implemented';
}
