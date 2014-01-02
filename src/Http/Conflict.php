<?php
namespace Http;

/**
 * Indicates that the request could not be processed because of conflict
 * in the request, such as an edit conflict in the case of multiple updates.
 */
class Conflict extends ClientError
{
    public $code = 409;
    public $reason = 'Conflict';
}
