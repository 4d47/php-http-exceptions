<?php
namespace Http;

/**
 * The client has asked for a portion of the file, but the server cannot supply 
 * that portion.  For example, if the client asked for a part of the file 
 * that lies beyond the end of the file.
 */
class RequestRangeNotSatisfiable extends ClientError
{
    public $code = 416;
    public $reason = 'Request Range Not Statisfiable';
}
