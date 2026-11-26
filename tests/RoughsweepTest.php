<?php
/**
 * Tests for RoughSweep
 */

use PHPUnit\Framework\TestCase;
use Roughsweep\Roughsweep;

class RoughsweepTest extends TestCase {
    private Roughsweep $instance;

    protected function setUp(): void {
        $this->instance = new Roughsweep(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughsweep::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
