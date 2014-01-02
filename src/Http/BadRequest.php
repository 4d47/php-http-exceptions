<?php
namespace Http;

/**
 * The request cannot be fulfilled due to bad syntax.
 */
class BadRequest extends ClientError
{
    public $code = 400;
    public $reason = 'Bad Request';
}
