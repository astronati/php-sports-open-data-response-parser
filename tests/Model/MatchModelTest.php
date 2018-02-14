<?php

use PHPUnit\Framework\TestCase;
use SODRP\Model\MatchModel;

class MatchModelTest extends TestCase
{
    private function getTeamInstance()
    {
        $instance = $this->getMockBuilder('SODRP\Model\TeamModel')
          ->disableOriginalConstructor()
          ->getMock();
        return $instance;
    }

    public function testGetHomeTeam()
    {
        $homeTeam = $this->getTeamInstance();
        $awayTeam = $this->getTeamInstance();
        $matchModel = new MatchModel($homeTeam, $awayTeam);
        $this->assertEquals($homeTeam, $matchModel->getHomeTeam());
        $this->assertEquals($awayTeam, $matchModel->getAwayTeam());
    }
}
