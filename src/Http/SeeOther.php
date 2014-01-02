<?php
namespace Http;

/**
 * The response to the request can be found under another URI using a GET 
 * method.  When received in response to a POST (or PUT/DELETE), it should be 
 * assumed that the server has received the data and the redirect should be 
 * issued with a separate GET message.
 *
 * @since HTTP/1.1
 */
class SeeOther extends Redirection
{
    public $code = 303;
    public $reason = 'See Other';
}
