<?php

namespace SODRP\Model;

class MatchModel
{
    /**
     * @var array
     */
    private $match;

    /**
     * @var TeamModel
     */
    private $homeTeam;

    /**
     * @var TeamModel
     */
    private $awayTeam;

    public function __construct($match, TeamModel $homeTeam, TeamModel $awayTeam)
    {
        $this->match = $match;
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
    }

    /**
     * Returns the start date of the match as ISO DateTime following format
     * 2018-02-14T00:00:00+02:00
     * @return string
     */
    public function getDate(): string
    {
        return $this->match['date_match'];
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
