<?php

namespace SODRP\tests\Model;

use PHPUnit\Framework\TestCase;
use SODRP\Model\PlayerModel;

class PlayerModelTest extends TestCase
{
    public function dataProvider()
    {
        return [
          ['Ronaldo', 'Cristiano', 7],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param string $fullname
     * @param string $name
     * @param int $number
     */
    public function testGetLastName($fullname, $name, $number)
    {
        $playerModel = new PlayerModel([
          'fullname' => $fullname,
          'name' => $name,
          'number' => $number,
        ]);
        $this->assertSame($fullname, $playerModel->getLastName());
    }

    /**
     * @dataProvider dataProvider
     * @param string $fullname
     * @param string $name
     * @param int $number
     */
    public function testGetFirstName($fullname, $name, $number)
    {
        $playerModel = new PlayerModel([
          'fullname' => $fullname,
          'name' => $name,
          'number' => $number,
        ]);
        $this->assertSame($name, $playerModel->getFirstName());
    }

    /**
     * @dataProvider dataProvider
     * @param string $fullname
     * @param string $name
     * @param int $number
     */
    public function testGetNumber($fullname, $name, $number)
    {
        $playerModel = new PlayerModel([
          'fullname' => $fullname,
          'name' => $name,
          'number' => $number,
        ]);
        $this->assertSame($number, $playerModel->getNumber());
    }
}
