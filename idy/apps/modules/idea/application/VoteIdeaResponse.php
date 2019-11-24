<?php

namespace Idy\Idea\Application;

class VoteIdeaResponse
{
    public $msg;

    public function __construct($msg)
    {
        // ret view?
        $this->msg = $msg;
    }

}