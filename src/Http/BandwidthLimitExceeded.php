<?php
namespace Http;

/**
 * This status code, while used by many servers,
 * is not specified in any RFCs.
 */
class BandwidthLimitExceeded extends ServerError
{
    public $code = 509;
    public $reason = 'Bandwidth Limit Exceeded';
}
