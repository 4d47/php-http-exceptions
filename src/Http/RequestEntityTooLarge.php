<?php
namespace Http;

/**
 * The request is larger than the server is willing or able to process.
 */
class RequestEntityTooLarge extends ClientError
{
    public $code = 413;
    public $reason = 'Request Entity Too Large';
}
