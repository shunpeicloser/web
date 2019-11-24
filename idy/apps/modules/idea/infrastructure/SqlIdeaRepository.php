<?php 

namespace Idy\Idea\Infrastructure;

use Idy\Idea\Domain\Model\Idea;
use Idy\Idea\Domain\Model\IdeaId;
use Idy\Idea\Domain\Model\IdeaRepository;

class SqlIdeaRepository implements IdeaRepository
{
    private $ideas;

    public function __construct()
    {
        $this->ideas = array();
    }

    public function byId(IdeaId $id)
    {

    }

    public function save(Idea $idea)
    {

    }

    public function update(Idea $idea)
    {
        
    }

    public function allIdeas()
    {

    }
    
}