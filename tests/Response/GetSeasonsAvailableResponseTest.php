<?php

namespace SODRP\tests\Response;

use PHPUnit\Framework\TestCase;
use SODRP\Response\GetSeasonsAvailableResponse;

class GetSeasonsAvailableResponseTest extends TestCase
{
    private function getSeasonInstance($slug)
    {
        $instance = $this->getMockBuilder('SODRP\Model\SeasonModel')
          ->disableOriginalConstructor()
          ->setMethods(['getSlug'])
          ->getMock();
        $instance->method('getSlug')->willReturn($slug);
        return $instance;
    }

    public function testFindOneBySlug()
    {
        $response = [];
        foreach (['17-18', '18-19', '19-20'] as $seasonSlug) {
            $response[] = $this->getSeasonInstance($seasonSlug);
        }

        $getSeasonsAvailableResponse = new GetSeasonsAvailableResponse($response);
        $season = $getSeasonsAvailableResponse->findOneBySlug('17-18');
        $this->assertSame('17-18', $season->getSlug());
        $this->assertSame(null, $getSeasonsAvailableResponse->findOneBySlug('16-17'));
    }
}
