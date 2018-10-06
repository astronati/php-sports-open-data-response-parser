<?php

namespace SODRP\Response;

use SODRP\Model\PlayerModel;
use SODRP\Model\RoundModel;

class GetSeasonTeamsAvailablePlayersResponse
{
    /**
     * @var PlayerModel[]
     */
    protected $players;

    /**
     * @param PlayerModel[] $players
     */
    public function __construct(array $players)
    {
        $this->players = $players;
    }

    /**
     * @return PlayerModel[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }
}
