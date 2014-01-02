<?php
namespace Http;

/**
 * A request was made of a resource using a request method not supported by 
 * that resource; for example, using GET on a form which requires data to be 
 * presented via POST, or using PUT on a read-only resource.
 */
class MethodNotAllowed extends ClientError
{
    public $code = 405;
    public $reason = 'Method Not Allowed';
}
