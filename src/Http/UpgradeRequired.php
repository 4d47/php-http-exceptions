<?php
namespace Http;

/**
 * The client should switch to a different protocol such as TLS/1.0.
 */
class UpgradeRequired extends ClientError
{
    public $code = 426;
    public $reason = 'Upgrade Required';
}
