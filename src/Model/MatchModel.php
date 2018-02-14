<?php

namespace SODRP\Model;

class MatchModel
{
    /**
     * @var TeamModel
     */
    private $homeTeam;

    /**
     * @var TeamModel
     */
    private $awayTeam;

    public function __construct(TeamModel $homeTeam, TeamModel $awayTeam)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
    }

    /**
     * Returns the home team
     * @return TeamModel
     */
    public function getHomeTeam(): TeamModel
    {
        return $this->homeTeam;
    }

    public function getAwayTeam(): TeamModel
    {
        return $this->awayTeam;
    }
}
