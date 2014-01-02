<?php
namespace Http;

class MultipleChoices extends Redirection
{
    public $code = 300;
    public $reason = 'Multiple Choices';
}
