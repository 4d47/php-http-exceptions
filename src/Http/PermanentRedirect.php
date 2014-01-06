<?php
namespace Http;

/**
 * The request, and all future requests should be repeated using another URI. 
 * 307 and 308 (as proposed) parallel the behaviours of 302 and 301, but do not 
 * allow the HTTP method to change. So, for example, submitting a form to a 
 * permanently redirected resource may continue smoothly.
 */
class PermanentRedirect extends Redirection
{
    public $code = 308;
    public $reason = 'Permanent Redirect';
}
