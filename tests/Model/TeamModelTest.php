<?php

namespace SODRP\tests\Model;

use PHPUnit\Framework\TestCase;
use SODRP\Model\TeamModel;

class TeamModelTest extends TestCase
{
    public function dataProvider()
    {
        return [
          ['Juventus'],
          ['Milan'],
          ['Inter'],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param string $name
     */
    public function testGetName($name)
    {
        $teamModel = new TeamModel(['team' => $name]);
        $this->assertSame($name, $teamModel->getName());
    }
}
