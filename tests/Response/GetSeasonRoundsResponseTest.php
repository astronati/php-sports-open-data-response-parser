<?php

use PHPUnit\Framework\TestCase;
use SODRP\Response\GetSeasonRoundsResponse;

class GetSeasonRoundsResponseTest extends TestCase
{
    private function getRoundInstance()
    {
        $instance = $this->getMockBuilder('SODRP\Model\RoundModel')
          ->disableOriginalConstructor()
          ->getMock();
        return $instance;
    }

    public function testGetRounds()
    {
        $response = [];
        for ($i = 0; $i < 3; $i++) {
            $response[] = $this->getRoundInstance();
        }

        $getSeasonRoundsResponse = new GetSeasonRoundsResponse($response);
        $this->assertEquals($response[0], $getSeasonRoundsResponse->getRounds()[0]);
    }
}
