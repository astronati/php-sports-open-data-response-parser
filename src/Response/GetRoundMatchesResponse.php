<?php

namespace SODRP\Response;

use SODRP\Model\MatchModel;

class GetRoundMatchesResponse
{
    /**
     * @var MatchModel[]
     */
    protected $matches;

    /**
     * @param MatchModel[] $matches
     */
    public function __construct(array $matches)
    {
        $this->matches = $matches;
    }

    /**
     * @return MatchModel[]
     */
    public function getMatches(): array
    {
        return $this->matches;
    }
}
