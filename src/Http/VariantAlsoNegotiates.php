<?php
namespace Http;

/**
 * Transparent content negotiation for the request results
 * in a circular reference.
 *
 * @see http://www.ietf.org/rfc/rfc2295.txt
 */
class VariantAlsoNegotiates.php extends ServerError
{
    public $code = 506;
    public $reason = 'Variant Also Negotiates';
}
