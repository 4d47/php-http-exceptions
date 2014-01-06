<?php
namespace Http;

/**
 * No longer used.  Originally meant "Subsequent requests should use the 
 * specified proxy."
 */
class SwitchProxy extends Redirection
{
    public $code = 306;
    public $reason = 'Switch Proxy';
}
