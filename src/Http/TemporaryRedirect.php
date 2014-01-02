<?php
namespace Http;

/**
 * In this case, the request should be repeated with another URI; however,
 * future requests should still use the original URI.  In contrast to how
 * 302 was historically implemented, the request method is not allowed to be
 * changed when reissuing the original request. For instance, a POST request
 * should be repeated using another POST request.
 *
 * @since HTTP/1.1
 */
class TemporaryRedirect extends Redirection
{
    public $code = 307;
    public $reason = 'Temporary Redirect';
}
