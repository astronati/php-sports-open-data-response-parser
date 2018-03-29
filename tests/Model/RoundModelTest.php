<?php

use PHPUnit\Framework\TestCase;
use SODRP\Model\RoundModel;

class RoundModelTest extends TestCase
{
    public function dataProvider()
    {
        return [
          ['Round 1', '2017-07-07T00:00:00+02:00', '2018-07-07T00:00:00+02:00'],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param string $name
     * @param string $firstMatchDate
     * @param string $lastMatchDate
     */
    public function testGetFirstMatchDate($name, $firstMatchDate, $lastMatchDate)
    {
        $roundModel = new RoundModel([
          'start_date' => $firstMatchDate,
          'end_date' => $lastMatchDate,
          'name' => $name,
        ]);
        $this->assertSame($firstMatchDate, $roundModel->getFirstMatchDate());
    }

    /**
     * @dataProvider dataProvider
     * @param string $name
     * @param string $firstMatchDate
     * @param string $lastMatchDate
     */
    public function testGetLastMatchDate($name, $firstMatchDate, $lastMatchDate)
    {
        $roundModel = new RoundModel([
          'start_date' => $firstMatchDate,
          'end_date' => $lastMatchDate,
          'name' => $name,
        ]);
        $this->assertSame($lastMatchDate, $roundModel->getLastMatchDate());
    }

    /**
     * @dataProvider dataProvider
     * @param string $name
     * @param string $firstMatchDate
     * @param string $lastMatchDate
     */
    public function testGetSlug($name, $firstMatchDate, $lastMatchDate)
    {
        $roundModel = new RoundModel([
          'start_date' => $firstMatchDate,
          'end_date' => $lastMatchDate,
          'name' => $name,
        ]);
        $this->assertSame(1, $roundModel->getNumber());
    }
}
