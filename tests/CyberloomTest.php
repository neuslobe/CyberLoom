<?php
/**
 * Tests for CyberLoom
 */

use PHPUnit\Framework\TestCase;
use Cyberloom\Cyberloom;

class CyberloomTest extends TestCase {
    private Cyberloom $instance;

    protected function setUp(): void {
        $this->instance = new Cyberloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cyberloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
