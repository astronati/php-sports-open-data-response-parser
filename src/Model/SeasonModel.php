<?php

namespace SODRP\Model;

class SeasonModel
{
    /**
     * @var array
     */
    private $season;

    public function __construct(array $season)
    {
        $this->season = $season;
    }

    /**
     * Returns the season start date as ISO DateTime following format 2018-02-14T00:00:00+02:00
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->season['season_start'];
    }

    /**
     * Returns the season end date as ISO DateTime following format 2018-02-14T00:00:00+02:00
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->season['season_end'];
    }

    /**
     * Returns the slug of the current season.
     * @return string
     */
    public function getSlug(): string
    {
        return $this->season['season_slug'];
    }
}
