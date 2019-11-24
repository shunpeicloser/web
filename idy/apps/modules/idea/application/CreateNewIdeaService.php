<?php

namespace Idy\Idea\Application;

use Idy\Idea\Domain\Model\IdeaRepository;

use Idy\Idea\Domain\Model\Author;

class CreateNewIdeaService
{
    private $ideaRepository;

    public function __construct(
        IdeaRepository $ideaRepository)
    {
        $this->ideaRepository = $ideaRepository;
    }

    public function execute(CreateNewIdeaRequest $request)
    {
        $author = new Author( $request->authorName, $request->authorEmail);

        $idea = new Idea(null, $request->ideaTitle, $request->ideaDescription, $author);

        $this->ideaRepository->save($idea);

        return CreateNewIdeaResponse('Idea has been created.');
    }

}