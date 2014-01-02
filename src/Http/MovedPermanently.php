<?php
namespace Http;

/**
 * This and all future requests should be directed to the given URI.
 */
class MovedPermanently extends Redirection
{
    public $code = 301;
    public $reason = 'Moved Permanently';
}
