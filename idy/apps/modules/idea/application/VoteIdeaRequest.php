<?php

namespace Idy\Idea\Application;

class VoteIdeaRequest
{
    public $ideaId;

    public function __construct($ideaId)
    {
        $this->ideaId = $ideaId;
    }

}