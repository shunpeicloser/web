<?php

namespace Idy\Idea\Application;

class CreateNewIdeaRequest
{
    public $ideaTitle;
    public $authorName;
    public $authorEmail;
    public $ideaDescription;

    public function __construct($ideaTitle, $authorName, $authorEmail, $ideaDescription)
    {
        $this->ideaTitle = $ideaTitle;
        $this->authorName = $authorName;
        $this->authorEmail = $authorEmail;
        $this->ideaDescription = $ideaDescription;
    }

}