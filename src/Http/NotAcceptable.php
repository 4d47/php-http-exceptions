<?php
namespace Http;

/**
 * The requested resource is only capable of generating content not acceptable 
 * according to the Accept headers sent in the request.
 */
class NotAcceptable extends ClientError
{
    public $code = 406;
    public $reason = 'Not Acceptable';
}
