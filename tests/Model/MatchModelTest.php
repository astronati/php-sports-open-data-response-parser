<?php

namespace SODRP\tests\Model;

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
        $matchModel = new MatchModel([], $homeTeam, $this->getTeamInstance());
        $this->assertEquals($homeTeam, $matchModel->getHomeTeam());
    }

    public function testGetAwayTeam()
    {
        $awayTeam = $this->getTeamInstance();
        $matchModel = new MatchModel([], $this->getTeamInstance(), $awayTeam);
        $this->assertEquals($awayTeam, $matchModel->getAwayTeam());
    }

    public function testGetDate()
    {
        $matchModel = new MatchModel(['date_match' => '2018-03-21T00:00:00+02:00'], $this->getTeamInstance(), $this->getTeamInstance());
        $this->assertEquals('2018-03-21T00:00:00+02:00', $matchModel->getDate());
    }
}
