<?php

namespace Idy\Idea\Application;

use Idy\Idea\Domain\Model\IdeaRepository;

class RateIdeaService
{
    private $ideaRepository;

    public function __construct(
        IdeaRepository $ideaRepository)
    {
        $this->ideaRepository = $ideaRepository;
    }

    public function execute(RateIdeaRequest $request)
    {
        $idea = $this->ideaRepository->byId($request->ideaId);

        $idea->addRating($request->user, $request->ideaRatingValue);

        $this->ideaRepository->update($idea);
    
        return RateIdeaResponse('Idea has been rated.');
    }

}