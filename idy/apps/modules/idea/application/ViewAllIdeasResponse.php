<?php

namespace Idy\Idea\Application;

class ViewAllIdeaResponse
{
    public $ideas;

    public function __construct($ideas)
    {
        // ret views
        $this->ideas = $ideas;
    }

}