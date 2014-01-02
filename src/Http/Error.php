<?php
namespace Http;

/**
 * Base class for status codes in the 4xx and 5xx range.
 * This is an exception which indicates that an error has occurred,
 * and that any work in progress should not be committed.
 */
abstract class Error extends Exception
{
}
