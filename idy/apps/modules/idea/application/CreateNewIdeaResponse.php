<?php

namespace Idy\Idea\Application;

class CreateNewIdeaResponse
{
    public $msg;

    public function __construct($msg)
    {
        // ret view?
        $this->msg = $msg;
    }

}