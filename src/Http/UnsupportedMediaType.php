<?php
namespace Http;

/**
 * The request entity has a media type which the server or resource does not 
 * support.  For example, the client uploads an image as image/svg+xml, but 
 * the server requires that images use a different format.
 */
class UnsupportedMediaType extends ClientError
{
    public $code = 415;
    public $reason = 'Unsupported Media Type';
}
