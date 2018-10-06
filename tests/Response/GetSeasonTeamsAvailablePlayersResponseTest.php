<?php

namespace SODRP\tests\Response;

use PHPUnit\Framework\TestCase;
use SODRP\Response\GetSeasonTeamsAvailablePlayersResponse;

class GetSeasonTeamsAvailablePlayersResponseTest extends TestCase
{
    private function getPlayerInstance()
    {
        $instance = $this->getMockBuilder('SODRP\Model\PlayerModel')
          ->disableOriginalConstructor()
          ->getMock();
        return $instance;
    }

    public function testGetPlayers()
    {
        $response = [];
        for ($i = 0; $i < 3; $i++) {
            $response[] = $this->getPlayerInstance();
        }

        $getSeasonTeamsAvailablePlayersResponse = new GetSeasonTeamsAvailablePlayersResponse($response);
        $this->assertSame($response[0], $getSeasonTeamsAvailablePlayersResponse->getPlayers()[0]);
    }
}
