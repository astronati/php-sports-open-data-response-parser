<?php

use PHPUnit\Framework\TestCase;
use SODRP\Model\SeasonModel;

class SeasonModelTest extends TestCase
{
    public function dataProvider()
    {
        return [
          ['17-18', '2017-07-07T00:00:00+02:00', '2018-07-07T00:00:00+02:00'],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param string $slug
     * @param string $startDate
     * @param string $endDate
     */
    public function testGetStartDate($slug, $startDate, $endDate)
    {
        $seasonModel = new SeasonModel([
          'season_start' => $startDate,
          'season_end' => $endDate,
          'season_slug' => $slug,
        ]);
        $this->assertSame($startDate, $seasonModel->getStartDate());
    }

    /**
     * @dataProvider dataProvider
     * @param string $slug
     * @param string $startDate
     * @param string $endDate
     */
    public function testGetEndDate($slug, $startDate, $endDate)
    {
        $seasonModel = new SeasonModel([
          'season_start' => $startDate,
          'season_end' => $endDate,
          'season_slug' => $slug,
        ]);
        $this->assertSame($endDate, $seasonModel->getEndDate());
    }

    /**
     * @dataProvider dataProvider
     * @param string $slug
     * @param string $startDate
     * @param string $endDate
     */
    public function testGetSlug($slug, $startDate, $endDate)
    {
        $seasonModel = new SeasonModel([
          'season_start' => $startDate,
          'season_end' => $endDate,
          'season_slug' => $slug,
        ]);
        $this->assertSame($slug, $seasonModel->getSlug());
    }
}
