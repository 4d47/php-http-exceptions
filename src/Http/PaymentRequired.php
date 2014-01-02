<?php
namespace Http;

/**
 * Reserved for future use.  The original intention was that this code might 
 * be used as part of some form of digital cash or micropayment scheme, but 
 * that has not happened, and this code is not usually used.  YouTube uses this 
 * status if a particular IP address has made excessive requests, and requires 
 * the person to enter a CAPTCHA.
 */
class PaymentRequired extends ClientError
{
    public $code = 402;
    public $reason = 'Payment Required';
}
