<?php

namespace SODRP\tests\Response;

use PHPUnit\Framework\TestCase;
use SODRP\Exception\NotFoundResponseTypeException;
use SODRP\Response\GetRoundMatchesResponse;
use SODRP\Response\GetSeasonRoundsResponse;
use SODRP\Response\GetSeasonsAvailableResponse;
use SODRP\Response\GetSeasonTeamsAvailablePlayersResponse;
use SODRP\Response\ResponseParser;

class ResponseParserTest extends TestCase
{
    public function dataProvider()
    {
        return [
          [['data' => ['matches' => [['home' => [], 'away' => []]]]], ResponseParser::GET_ROUND_MATCHES, GetRoundMatchesResponse::class],
          [['data' => ['rounds' => [['name' => 'round1']]]], ResponseParser::GET_SEASON_ROUNDS, GetSeasonRoundsResponse::class],
          [['data' => ['seasons' => [['slug' => '17-18']]]], ResponseParser::GET_SEASONS_AVAILABLE, GetSeasonsAvailableResponse::class],
          [['data' => ['players' => [['number' => 2]]]], ResponseParser::GET_SEASON_TEAMS_AVAILABLE_PLAYERS, GetSeasonTeamsAvailablePlayersResponse::class],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param array $apiResponse
     * @param int $type
     * @param string $expectedClass
     * @throws NotFoundResponseTypeException
     */
    public function testGetResponse($apiResponse, $type, $expectedClass)
    {
        $response = ResponseParser::create($apiResponse, $type);
        $this->assertSame($expectedClass, get_class($response));
    }

    /**
     * @throws NotFoundResponseTypeException
     */
    public function testException()
    {
        $this->expectException("\Exception");
        ResponseParser::create([], -1);
    }
}
