<?php

namespace SODRP\tests\Response;

use PHPUnit\Framework\TestCase;
use SODRP\Response\GetRoundMatchesResponse;

class GetRoundMatchesResponseTest extends TestCase
{
    private function getMatchInstance()
    {
        $instance = $this->getMockBuilder('SODRP\Model\MatchModel')
          ->disableOriginalConstructor()
          ->getMock();
        return $instance;
    }

    public function testGetMatches()
    {
        $response = [];
        for ($i = 0; $i < 3; $i++) {
            $response[] = $this->getMatchInstance();
        }

        $getRoundMatchesResponse = new GetRoundMatchesResponse($response);
        $this->assertSame($response[0], $getRoundMatchesResponse->getMatches()[0]);
    }
}
