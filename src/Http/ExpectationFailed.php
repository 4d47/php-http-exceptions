<?php
namespace Http;

/**
 * The server cannot meet the requirements of the Expect request-header field.
 */
class ExpectationFailed extends ClientError
{
    public $code = 417;
    public $reason = 'Exception Failed';
}
