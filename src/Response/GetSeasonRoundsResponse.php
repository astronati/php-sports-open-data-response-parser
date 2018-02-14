<?php

namespace SODRP\Response;

use SODRP\Model\RoundModel;

class GetSeasonRoundsResponse extends ResponseAbstract
{
    /**
     * @return RoundModel[]
     */
    public function getRounds(): array
    {
        return $this->response;
    }
}
