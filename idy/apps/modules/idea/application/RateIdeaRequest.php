<?php

namespace Idy\Idea\Application;

class RateIdeaRequest
{
    public $rater;
    public $ideaId;
    public $ideaRatingValue;

    public function __construct($rater, $ideaId, $rateValue)
    {
        $this->rater = $rater;
        $this->ideaId = $ideaId;
        $this->ideaRatingValue = $rateValue;
    }

}