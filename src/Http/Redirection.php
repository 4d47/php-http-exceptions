<?php
namespace Http;

/**
 * The client must take additional action to complete the request.
 * 
 * This class of status code indicates that further action needs to be taken by 
 * the user agent to fulfil the request. The action required may be carried out by 
 * the user agent without interaction with the user if and only if the method used 
 * in the second request is GET or HEAD. A user agent should not automatically 
 * redirect a request more than five times, since such redirections usually 
 * indicate an infinite loop.
 */
abstract class Redirection extends Exception
{
    public $location;

    /**
     * @param string $location
     * @param $message redirection message, will be sent to the browser,
     *   if not provided a simple html like message will be set
     * @param \Exception $previous exception if nested exception
     */
    public function __construct($location, $message = null, \Exception $previous = null)
    {
        $this->location = $location;
        if (is_null($message))
            $message = "
                The resource has been moved to <a href='$location'>$location</a>;
                you should be redirected automatically.
            ";
        parent::__construct($message, $previous);
    }
}
