<?php
namespace Http;

/**
 * The user has sent too many requests in a given amount of time.
 * Intended for use with rate limiting schemes.
 */
class TooManyRequests extends ClientError
{
    public $code = 429;
    public $reason = 'Too Many Requests';
}
