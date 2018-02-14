<?php

use PHPUnit\Framework\TestCase;
use SODRP\Response\GetRoundMatchesResponse;
use SODRP\Response\GetSeasonRoundsResponse;
use SODRP\Response\GetSeasonsAvailableResponse;
use SODRP\Response\ResponseParser;

class ResponseParserTest extends TestCase
{
    public function dataProvider()
    {
        return [
          [['data' => ['matches' => [['home' => [], 'away' => []]]]], ResponseParser::GET_ROUND_MATCHES, GetRoundMatchesResponse::class],
          [['data' => ['rounds' => [['name' => 'round1']]]], ResponseParser::GET_SEASON_ROUNDS, GetSeasonRoundsResponse::class],
          [['data' => ['seasons' => [['slug' => '17-18']]]], ResponseParser::GET_SEASONS_AVAILABLE, GetSeasonsAvailableResponse::class],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param array $apiResponse
     * @param int $type
     * @param string $expectedClass
     */
    public function testGetResponse($apiResponse, $type, $expectedClass)
    {
        $response = ResponseParser::create($apiResponse, $type);
        $this->assertSame($expectedClass, get_class($response));
    }

    public function testException()
    {
        $this->expectException("\Exception");
        $response = ResponseParser::create([], -1);
    }
}
