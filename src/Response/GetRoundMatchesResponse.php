<?php

namespace SODRP\Response;

use SODRP\Model\MatchModel;

class GetRoundMatchesResponse extends ResponseAbstract
{
    /**
     * @return MatchModel[]
     */
    public function getMatches(): array
    {
        return $this->response;
    }
}
