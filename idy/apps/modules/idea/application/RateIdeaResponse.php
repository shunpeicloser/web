<?php

namespace Idy\Idea\Application;

class RateIdeaResponse
{
    public $msg;

    public function __construct($msg)
    {
        // ret view
        $this->msg = $msg;
    }

}