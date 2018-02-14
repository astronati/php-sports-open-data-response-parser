<?php

namespace SODRP\Model;

class TeamModel
{
    /**
     * @var array
     */
    private $team;

    public function __construct(array $team)
    {
        $this->team = $team;
    }

    /**
     * Returns the name of the team
     * @return string
     */
    public function getName(): string
    {
        return $this->team['team'];
    }
}
