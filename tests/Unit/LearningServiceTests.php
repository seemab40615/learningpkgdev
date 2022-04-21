<?php

namespace Seemab40615\Learningpkgdev\Tests\Unit;


use Seemab40615\Learningpkgdev\Tests\TestCase;
use Seemab40615\Learningpkgdev\Services\LearningService;

class LearningServiceTests extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function isLearningGoodTest():void
    {
        $gatewayMock= $this->createMock(LearningService::class);

        $gatewayMock->method('isLearningGood')
            ->willReturn(true);

        $this->assertSame(true, $gatewayMock->isLearningGood());
    }
}
