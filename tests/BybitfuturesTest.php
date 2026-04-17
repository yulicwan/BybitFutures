<?php
/**
 * Tests for BybitFutures
 */

use PHPUnit\Framework\TestCase;
use Bybitfutures\Bybitfutures;

class BybitfuturesTest extends TestCase {
    private Bybitfutures $instance;

    protected function setUp(): void {
        $this->instance = new Bybitfutures(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bybitfutures::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
