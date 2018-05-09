<?php

namespace SODRP\Response;

use SODRP\Exception\NotFoundResponseTypeException;
use SODRP\Model\MatchModel;
use SODRP\Model\RoundModel;
use SODRP\Model\SeasonModel;
use SODRP\Model\TeamModel;

class ResponseParser
{
    const GET_ROUND_MATCHES = 1;
    const GET_SEASON_ROUNDS = 2;
    const GET_SEASONS_AVAILABLE = 3;

    /**
     * @param array $apiResponse The response from the API
     * @param int $type
     * @return mixed
     * @throws NotFoundResponseTypeException When the type is not allowed
     */
    public static function create(array $apiResponse, $type)
    {
        $response = array();

        switch ($type) {
            case self::GET_ROUND_MATCHES:
                foreach ($apiResponse['data']['matches'] as $match) {
                    $response[] = new MatchModel(
                      $match,
                      new TeamModel($match['home']),
                      new TeamModel($match['away'])
                    );
                }
                return new GetRoundMatchesResponse($response);
            case self::GET_SEASON_ROUNDS:
                foreach ($apiResponse['data']['rounds'] as $round) {
                    $response[] = new RoundModel($round);
                }
                return new GetSeasonRoundsResponse($response);
            case self::GET_SEASONS_AVAILABLE:
                foreach ($apiResponse['data']['seasons'] as $season) {
                    $response[] = new SeasonModel($season);
                }
                return new GetSeasonsAvailableResponse($response);
            default:
                throw new NotFoundResponseTypeException('Response type not found');
        }
    }
}
