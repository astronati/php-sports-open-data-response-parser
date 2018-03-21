<?php

namespace SODRP\Response;

use SODRP\Model\SeasonModel;

class GetSeasonsAvailableResponse
{
    /**
     * @var SeasonModel[]
     */
    protected $seasons;

    /**
     * @param SeasonModel[] $seasons
     */
    public function __construct(array $seasons)
    {
        $this->seasons = $seasons;
    }

    /**
     * @param string $seasonSlug
     * @return SeasonModel?
     */
    public function findOneBySlug(string $seasonSlug): ?SeasonModel
    {
        foreach ($this->seasons as $season) {
            if ($season->getSlug() == $seasonSlug) {
                return $season;
            }
        }
        return null;
    }
}
