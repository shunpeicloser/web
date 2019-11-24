<?php

namespace Idy\Idea\Controllers\Web;

use Idy\Idea\Application\CreateNewIdeaRequest;
use Idy\Idea\Application\CreateNewIdeaService;
use Idy\Idea\Application\RateIdeaRequest;
use Idy\Idea\Application\RateIdeaService;
use Idy\Idea\Application\ViewAllIdeasService;
use Idy\Idea\Application\VoteIdeaRequest;
use Idy\Idea\Application\VoteIdeaService;

use Phalcon\Mvc\Controller;
use Phalcon\Di;

class IdeaController extends Controller
{
    public function indexAction()
    {
        $ideaRepo = Di::getDefault()->get('sql_idea_repository');
        $service = new ViewAllIdeasService($ideaRepo);
        $response = $service->execute();

        return $this->view->pick('home');
    }

    public function addFormAction()
    {
        return $this->view->pick('add');
    }

    public function addFormDataAction()
    {
        if(!$this->request->isPost()){
            return $this->addFormAction();
        }
        // no validator for now

        $ideaRepo = Di::getDefault()->get('sql_idea_repository');
        $service = new CreateNewIdeaService($ideaRepo);
        $add_request = new CreateNewIdeaRequest(
            $this->request->getPost('title'),
            $this->request->getPost('authorname'),
            $this->request->getPost('authoremail'),
            $this->request->getPost('description')
        );
        return $this->response->redirect('/');
    }

    public function rateFormAction()
    {
        return $this->view->pick('vote');
    }

    public function rateFormDataAction()
    {
        
    }

    public function voteAction()
    {

    }

}