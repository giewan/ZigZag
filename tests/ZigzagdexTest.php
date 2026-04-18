<?php
/**
 * Tests for ZigZagDex
 */

use PHPUnit\Framework\TestCase;
use Zigzagdex\Zigzagdex;

class ZigzagdexTest extends TestCase {
    private Zigzagdex $instance;

    protected function setUp(): void {
        $this->instance = new Zigzagdex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zigzagdex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
