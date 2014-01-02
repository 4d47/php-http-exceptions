<?php
namespace Http;

/**
 * The 4xx class of status code is intended for cases in which the client seems 
 * to have erred. Except when responding to a HEAD request, the server should 
 * include an entity containing an explanation of the error situation, and 
 * whether it is a temporary or permanent condition. These status codes are 
 * applicable to any request method. User agents should display any included 
 * entity to the user.
 */
abstract class ClientError extends Error
{
}
