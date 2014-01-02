<?php
namespace Http;

/**
 * The server does not meet one of the preconditions that the requester
 * put on the request.
 */
class PreconditionFailed extends ClientError
{
    public $code = 412;
    public $reason = 'Precondition Failed';
}
