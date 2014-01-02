<?php
namespace Http;

/**
 * The request did not specify the length of its content,
 * which is required by the requested resource.
 */
class LengthRequired extends ClientError
{
    public $code = 411;
    public $reason = 'Lenght Required';
}
