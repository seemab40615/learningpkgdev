<?php

namespace Seemab40615\Learningpkgdev\Tests\Feature;

use Seemab40615\Learningpkgdev\Tests\TestCase;

class LearningControllerTests extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function indexTest(): void
    {
        $statusCode = $this->get("/learning")->getStatusCode();
        $this->assertTrue($statusCode == 200);
    }
}
