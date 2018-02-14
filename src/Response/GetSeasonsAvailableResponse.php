<?php

namespace SODRP\Response;

use SODRP\Model\SeasonModel;

class GetSeasonsAvailableResponse extends ResponseAbstract
{
    /**
     * @param string $seasonSlug
     * @return SeasonModel?
     */
    public function findOneBySlug(string $seasonSlug): ?SeasonModel
    {
        foreach ($this->response as $season) {
            if ($season->getSlug() == $seasonSlug) {
                return $season;
            }
        }
        return null;
    }
}
