<?php

namespace SODRP\Response;

use SODRP\Model\RoundModel;

class GetSeasonRoundsResponse
{
    /**
     * @var RoundModel[]
     */
    protected $rounds;

    /**
     * @param RoundModel[] $rounds
     */
    public function __construct(array $rounds)
    {
        $this->rounds = $rounds;
    }

    /**
     * @return RoundModel[]
     */
    public function getRounds(): array
    {
        return $this->rounds;
    }
}
